@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	{!! Form::open(['url' => route('admin_tags_update'), 'method' => 'put', 'id' => 'tags-form']) !!}

        {{ csrf_field() }}

        <div class="grid-x grid-padding-x">
            <?php foreach ($tags as $tag): ?>
                <div class="small-3 cell tag-button margin-bottom">
                    <input type="checkbox" name="tag_ids[]" value="<?= $tag->id ?>" id="tag_<?= $tag->id ?>" <?= ($tag->is_valid) ? 'checked' : '' ?>>
                    <label for="tag_<?= $tag->id ?>"><?= $tag->name ?></label>
                </div>
            <?php endforeach ?>
        </div>
        <div class="grid-x grid-padding-x margin-bottom">
            <div class="small-12 cell margin-bottom">
                <hr>
                <button class="button large"><?= __('messages.save') ?></button>
            </div>
        </div>
    </form>
@endsection
