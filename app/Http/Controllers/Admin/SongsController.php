<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Actions\SongsUpdate;

class SongsController extends Controller
{
    /**
     * Show the Songs page
     * @param  Illuminate\Http\Request $request
     * @param  App\Song $model
     */
    public function edit(Request $request, Song $model)
    {
        $songs = $model->orderBy('name', 'asc')->get();

        return view('admin.songs.edit', compact('songs'));
    }

    /**
     * Will populate the db with file name data
     */
    public function update(Request $request, SongsUpdate $songsUpdate)
    {
        $songsUpdate->run();
        
        // $exitCode = Artisan::call('karaoke:songs:update');

        // $mediaLibrary->syncFiles();
        
        // redirect to
        return redirect()->route('admin_songs_edit');
    }

    /**
     * Will populate the db with file name data
     */
    public function progress(Request $request, Song $model)
    {
        // $progress = $mediaLibrary->getProgress() / $mediaLibrary->getProgressUnits();

        // TODO how to display output to screen - SongsUpdate->getProgress(), getProgressUnits; progress_update event
    }
}
