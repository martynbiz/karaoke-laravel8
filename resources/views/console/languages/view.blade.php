@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-bottom">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('console_languages') }}">{{ __('messages.languages') }}</a></li>
                    <li class="show-for-sr">
                        <span class="show-for-sr">Current: </span> {{ $language->name }}
                    </li>
                </ul>
            </nav>

            <h2>{{ $language->name }}</h2>
            <hr>
            @include('console.shared.list_songs', [ 'songs' => $language->songs ])
        </div>
    </div>
@endsection
