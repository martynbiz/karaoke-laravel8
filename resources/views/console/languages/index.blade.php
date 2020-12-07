@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x margin-bottom">
        <div class="small-12 cell">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> {{ __('messages.languages') }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="grid-x grid-padding-x margin-bottom languages-list">
        <?php foreach ($languages as $language): ?>
            <div class="small-4 cell languages-list__item">
                <a href="{{ route('console_languages_view', ['id' => $language->id]) }}" class="button expanded large">{{ $language->name }}</a>
            </div>
        <?php endforeach ?>
    </div>
@endsection
