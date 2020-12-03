<?php

namespace App\Http\Controllers\Console\Api;

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
        $limit = (int)$request->input('limit', 20);

        // get paginated transactions for dispaying in the table
        $artists = $model->when($query, function($builder) use ($query) {
                return $builder->where('name', 'LIKE', "%$query%");
            })
            ->orderBy('name', 'asc')
            ->skip($start)
            ->take($limit)
            ->get();

        return $artists;
    }

    /**
     * View artist
     * @param  int  $id
     * @param  App\Artist $model
     */
    public function view($id, Artist $model)
    {
        $artist = $model
          ->with('tags')
          ->with('meta')
          ->findOrFail($id);

        return $artist;
    }
}
