@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('console_tags') }}">{{ __('messages.tags') }}</a></li>
                    <li class="show-for-sr">
                        <span class="show-for-sr">Current: </span> {{ $tag->name }}
                    </li>
                </ul>
            </nav>

            <h2>{{ $tag->name }}</h2>
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="small-12 cell">
            @include('console.shared.list_songs', [ 'songs' => $songs, 'include_artist_name' => true ])

			{{ $songs->links() }}
        </div>
    </div>
@endsection
