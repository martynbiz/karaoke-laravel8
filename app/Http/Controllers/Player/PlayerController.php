<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        return view('player/player/index');
    }
}
