@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-bottom">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> {{ __('messages.artists') }}
                    </li>
                </ul>
            </nav>

            <form action="{{ route('console_artists') }}" method="get">
                <div class="input-group">
                    <input class="input-group-field" name="query" type="text" value="{{ @$query }}" placeholder="Artist name">
                    <div class="input-group-button">
                        <input type="submit" class="button" value="{{ __('messages.search') }}">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="artists-list">
        <?php foreach ($groups as $letter => $artists): ?>
            <div class="grid-x grid-padding-x">
                <div class="small-12 cell artists-list__heading">
                    <h3 class="list-header">{{ $letter }}</h3>
                </div>
            </div>
            <div class="grid-x grid-padding-x margin-bottom">
                <?php foreach ($artists as $artist): ?>
                    <div class="small-4 cell artists-list__item">
                        <a href="{{ route('console_artists_view', ['id' => $artist->id]) }}" class="button expanded large">{{ $artist->name }}</a>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>
@endsection
