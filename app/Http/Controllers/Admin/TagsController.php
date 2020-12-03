<?php

namespace App\Http\Controllers\Admin;

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
    public function edit(Request $request, Tag $model)
    {
        $tags = $model->orderBy('name', 'asc')->get();

        return view('admin.tags.edit', compact('tags'));
    }

    /**
     * Will populate the db with file name data
     */
    public function update(Request $request, Tag $model)
    {
        // get ids from form (set these to valid)
        $validTagIds = $request->input('tag_ids');
        $tags = $model->get();
        foreach ($tags as $tag) {
            $tag->update([
                'is_valid' => in_array($tag->id, $validTagIds),
            ]);
        }

        // // TODO flash messae
        // $container->get('flash')->addMessage('success', sprintf($container->get('i18n')->translate('tags_been_updated'), $song->name));

        // redirect to
        return redirect()->route('admin_tags_edit');
    }
}
