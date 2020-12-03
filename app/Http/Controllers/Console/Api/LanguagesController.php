<?php

namespace App\Http\Controllers\Console\Api;

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

        return $languages;
    }

    /**
     * View language
     * @param  int  $id
     * @param  App\Language $model
     */
    public function view($id, Language $model)
    {
        $language = $model->findOrFail($id);

        return $language;
    }
}
