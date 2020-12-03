<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // /**
    //  * Illuminate\Support\Facades\Auth
    //  */
    // protected $request;
    //
    // public function __construct(Request $request)
    // {
    //     $this->request = $request;
    // }

    /**
     * Get the current sign in user user
     * @param Request $request Not really needed here, api uses it though
     * @return App\Playlist|null
     */
    protected function getCurrentPlaylist($request)
    {
        $playlist = null;

        // create playlist if non exist
        if ($user = $request->user()) {
            if (!$playlist = $user->playlists()->first()) {
                $playlist = $user->playlists()->create([
                    //
                ]);
            }
        }

        return $playlist;
    }
}
