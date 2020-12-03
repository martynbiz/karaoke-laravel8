<?php

namespace App\Http\Controllers\Console;

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
        $limit = (int)$request->input('limit', 100);

        $songs = $playlist->songs()
            ->with('artist')
            // ->with('meta')
            ->orderBy('playlist_song.created_at')
            // ->skip( $params['start'] )
            ->take( $limit )
            ->get();

        if ($request->ajax()) {
            return response()->json(compact('songs'));
        } else {
            return view('console.playlist.index', compact('songs'));
        }
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

        // flash message
        $request->session()->flash('success_message', "{$song->name} has been added to the playlist");

        // redirect to
        return redirect()->route('console_playlist');
    }

    /**
     * delete song from playlist
     */
    public function deleteSong($id, Request $request)
    {
        $playlist = $this->getCurrentPlaylist($request);
        $song = $playlist->songs()->findOrFail( (int)$id );

        return view('console.playlist.delete_song', compact('song'));
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

        if ($request->ajax()) {
            return response()->json(1);
        } else {
            $request->session()->flash('success_message', "{$song->name} has been remove from the playlist");
            return redirect()->route('console_playlist');
        }
    }
}
