<?php

namespace App\Http\Controllers\Console\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Song;

class PlaylistController extends Controller
{
    /**
     * edit song form
     */
    public function index(Request $request)
    {
        $playlist = $this->getCurrentPlaylist($request);

        // we use limit when requesting current song in /player
        $start = (int)$request->input('start', 0);
        $limit = (int)$request->input('limit', 100);

        $songs = $playlist->songs()
            ->with('artist')
            ->orderBy('created_at')
            ->skip( $start )
            ->take( $limit )
            ->get();

        return $songs;
    }
    /**
     * add song to playlist
     */
    public function addSong(Request $request, Song $songModel)
    {
        $song = $songModel->findOrFail((int)$request->input('song_id'));
        $playlist = $this->getCurrentPlaylist($request);

        // add this song to the playlist
        $playlist->songs()->attach($song);

        // update total_requests
        $song->increment('total_requests');

        return 200;
    }

    /**
     * delete song from playlist
     */
    public function deleteSong($id, Request $request)
    {
        $playlist = $this->getCurrentPlaylist($request);
        $song = $playlist->songs()->findOrFail( (int)$id );

        return 204;
    }

    /**
     * delete song from playlist
     */
    public function deleteSongSubmit($id, Request $request)
    {
        $playlist = $this->getCurrentPlaylist($request);
        $song = $playlist->songs()->findOrFail( (int)$id );

        // detach song from playlist
        $playlist->songs()->detach($song);

        return 204;
    }
}
