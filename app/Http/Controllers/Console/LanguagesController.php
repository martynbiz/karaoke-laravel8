<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Language;

class LanguagesController extends Controller
{
    /**
     * Show the languages page
     * @param  Illuminate\Http\Request $request
     * @param  App\Language $model
     */
    public function index(Request $request, Language $model)
    {
        $languages = $model->orderBy('name', 'asc')->get();

        return view('console.languages.index', compact('languages'));
    }

    /**
     * View language
     * @param  int  $id
     * @param  App\Language $model
     */
    public function view($id, Language $model)
    {
        $language = $model->findOrFail($id);

        return view('console.languages.view', compact('language'));
    }
}
