<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Artist;

class ArtistsController extends Controller
{
    /**
     * Show the homepage
     * @param  Illuminate\Http\Request $request
     * @param  App\Artist $model
     */
    public function index(Request $request, Artist $model)
    {
        $start = (int)$request->input('start', 0);
        $query = $request->input('query');

        // get paginated transactions for dispaying in the table
        $artists = $model->when($query, function($builder) use ($query) {
                return $builder->where('name', 'LIKE', "%$query%");
            })
            ->orderBy('name', 'asc')
            // ->skip($start)
            // ->take(20)
            ->get();

        $groups = [];
        foreach ($artists as $artist) {

            $letter = substr($artist->name, 0, 1);

            // if any number, just group under "#"
            if (is_numeric($letter)) $letter = '#';

            // create empty array if no already done so
            if (!isset($groups[$letter])) $groups[$letter] = [];
            array_push($groups[$letter], $artist);
        }

        return view('console.artists.index', compact('groups', 'query'));
    }

    /**
     * View artist
     * @param  int  $id
     * @param  App\Artist $model
     */
    public function view($id, Artist $model)
    {
        $artist = $model->findOrFail($id);

        return view('console.artists.view', compact('artist'));
    }
}
