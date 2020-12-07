@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('console_songs') }}">{{ __('messages.songs') }}</a></li>
                    <li><a href="{{ route('console_artists_view', ['id' => $song->artist->id]) }}">{{ $song->artist->name }}</a></li>
                    <li class="show-for-sr">
                        <span class="show-for-sr">Current: </span> {{ $song->name }}
                    </li>
                </ul>
            </nav>

            <h2>{{ $song->name }}</h2>
            <p>{!! $song->getMeta('summary') !!}</p>
            <ul class="song-tag-list">
                <?php foreach ($song->tags()->where('is_valid', 1)->get() as $tag): ?>
                    <li><a href="{{ route('console_tags_view', ['id' => $tag->id]) }}?back_path={{ route('console_songs_view', ['id' => $song->id]) }}" class="button">{{ $tag->name }}</a></li>
                <?php endforeach ?>
            </ul>
            <hr>
            <form action="{{ route('console_playlist_post', ['id' => $song->id]) }}" method="post" id="songs_queue_form">
				{{ csrf_field() }}
                <button name="song_id" value="{{ $song->id }}" class="button large"><span class="fa fa-rss"></span> {{ __('messages.add_to_queue') }}</button>
            </form>
        </div>
    </div>
@endsection
