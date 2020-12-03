<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsController extends Controller
{
    /**
     * Show the tags page
     * @param  Illuminate\Http\Request $request
     * @param  App\Tag $model
     */
    public function index(Request $request, Tag $model)
    {
        $tags = $model->where('is_valid', true)->orderBy('name', 'asc')->get();

        return view('console.tags.index', compact('tags'));
    }

    /**
     * View tag
     * @param  int  $id
     * @param  App\Tag $model
     */
    public function view($id, Tag $model)
    {
        $tag = $model->findOrFail($id);
        $songs = $tag->songs()->simplePaginate(20);

        return view('console.tags.view', compact('tag', 'songs'));
    }
}
