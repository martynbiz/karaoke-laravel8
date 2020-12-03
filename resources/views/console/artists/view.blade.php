@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-bottom">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('console_artists') }}">{{ __('messages.artists') }}</a></li>
                    <li class="show-for-sr">
                        <span class="show-for-sr">Current: </span> {{ $artist->name }}
                    </li>
                </ul>
            </nav>

            <h2>{{ $artist->name }}</h2>
            <p>{!! $artist->getMeta('summary') !!}</p>
            <ul class="song-tag-list">
                <?php foreach ($artist->tags()->where('is_valid', 1)->get() as $tag): ?>
                    <li><a href="{{ route('console_tags_view', ['tag_id' => $tag->id]) }}" class="button">{{ $tag->name }}</a></li>
                <?php endforeach ?>
            </ul>
            <hr>
            <h3>Songs</h3>
            @include('console.shared.list_songs', [ 'songs' => $artist->songs()->orderBy('name')->get() ])
        </div>
    </div>
@endsection
