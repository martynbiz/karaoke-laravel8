<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Actions\MediaLibrary;

class SettingsController extends Controller
{
    /**
     * Show the Songs page
     * @param  Illuminate\Http\Request $request
     * @param  App\Song $model
     */
    public function device(Request $request, Song $model)
    {
        // $ip = shell_exec("/sbin/ifconfig  | grep 'inet:'| grep -v '127.0.0.1' | cut -d: -f2 | awk '{ print $1}'");

        

        dd($_SERVER);

        return view('admin.settings.device', compact('ip'));
    }

    /**
     * Will populate the db with file name data
     */
    public function update(Request $request, MediaLibrary $mediaLibrary)
    {
        $mediaLibrary->syncFiles();
        
        // redirect to
        return redirect()->route('admin_songs_edit');
    }
}
