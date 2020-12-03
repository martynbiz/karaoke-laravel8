<?php

namespace App\Http\Controllers\Console\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Song;

class SongsController extends Controller
{
    /**
     * Show the homepage
     * @param  Illuminate\Http\Request $request
     * @param  App\Models\Song $model
     */
    public function index(Request $request, Song $model)
    {
        $start = (int)$request->input('start', 0);
        $query = $request->input('query');
        $limit = (int)$request->input('limit', 20);

        // get paginated transactions for dispaying in the table
        $songs = $model
            ->with('artist')
            // ->with('meta')
            ->orderBy('artist_id', 'asc')
            ->when($query, function($builder) use ($query) {
                return $builder->where('name', 'LIKE', "%$query%");
            })
            ->skip($start)
            ->take($limit)
            ->simplePaginate(20);

        return $songs;
    }

    /**
     * Show the homepage
     * @param  App\Models\Song $model
     */
    public function mostRequested(Song $model)
    {
        $songs = $model
            ->with('artist')
            // ->with('meta')
            ->orderBy('total_requests', 'desc')
            ->take(20)
            ->get();

        return $songs;
    }

    /**
     * edit song form
     * @param  int  $id
     * @param  App\Models\Song $model
     */
    public function view($id, Song $model)
    {
        $song = $model
          ->with('artist')
          ->with('tags')
          ->with('meta')
          ->findOrFail($id);

        return $song;
    }
}
