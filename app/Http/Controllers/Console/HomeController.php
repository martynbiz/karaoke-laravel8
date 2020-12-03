<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the homepage
     */
    public function index()
    {
        return view('console.home.index');
    }
}
