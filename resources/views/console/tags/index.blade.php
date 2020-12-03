@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> {{ __('messages.tags') }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid-x grid-padding-x margin-y tags-list">
        <?php foreach ($tags as $tag): ?>
            <div class="small-4 cell">
                <a href="{{ route('console_tags_view', ['tag_id' => $tag->id]) }}" class="button expanded large tags-list__item">{{ $tag->name }}</a>
            </div>
        <?php endforeach ?>
    </div>
@endsection
