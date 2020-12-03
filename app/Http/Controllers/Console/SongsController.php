<?php

namespace App\Http\Controllers\Console;

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

        // get paginated transactions for dispaying in the table
        $songs = $model->with('artist')
            ->orderBy('artist_id', 'asc')
            ->when($query, function($builder) use ($query) {
                return $builder->where('name', 'LIKE', "%$query%");
            })
            // ->skip($start)
            // ->take(20)
            ->simplePaginate(20);

        return view('console.songs.index', compact('songs', 'query'));
    }

    /**
     * Show the homepage
     * @param  App\Models\Song $model
     */
    public function mostRequested(Song $model)
    {
        $songs = $model->with('artist')
            ->orderBy('total_requests', 'desc')
            ->take(20)
            ->get();

        return view('console.songs.most_requested', compact('songs'));
    }

    /**
     * Show the homepage
     * @param  App\Models\Song $model
     */
    public function mostRecent(Request $request, Song $model)
    {
        $start = (int)$request->input('start', 0);
        $query = $request->input('query');

        // get paginated transactions for dispaying in the table
        $songs = $model->with('artist')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(20);

        return view('console.songs.most_recent', compact('songs'));
    }

    /**
     * edit song form
     * @param  int  $id
     * @param  App\Models\Song $model
     */
    public function view($id, Song $model)
    {
        $song = $model->findOrFail($id);

        return view('console.songs.view', compact('song'));
    }
}
