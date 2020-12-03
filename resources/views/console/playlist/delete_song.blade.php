@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-top">
        <div class="small-12 cell">
            {!! Form::open(['url' => route('console_playlist_delete_delete', [ 'id' => $song->id ]), 'method' => 'delete', 'id' => 'playlist-form']) !!}

                <p><?= sprintf(__('messages.are_you_sure_you_want_to_remove__song__'), $song->name) ?></p>

                <button class="button large"><?= __('messages.remove_song') ?></button>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
