@extends('layouts.console')

@section('title', 'Home')

@section('content')
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			<h2 class="text-center">{{ __('messages.main_menu') }}</h2>
		</div>
	</div>
	<div class="grid-x grid-padding-x">
		<div class="small-6 cell">
			<a href="{{ route('console_songs') }}" class="button large expanded"><span class="fa fa-music"></span> {{ __('messages.songs_button') }}</a>
		</div>
		<div class="small-6 cell">
			<a href="{{ route('console_artists') }}" class="button large expanded"><span class="fa fa-users"></span> {{ __('messages.artists_button') }}</a>
		</div>
		<div class="small-6 cell">
			<a href="{{ route('console_tags') }}" class="button large expanded"><span class="fa fa-tag"></span> {{ __('messages.genre_button') }}</a>
		</div>
		<div class="small-6 cell">
			<a href="{{ route('console_languages') }}" class="button large expanded"><span class="fa fa-globe"></span> {{ __('messages.languages_button') }}</a>
		</div>
		<div class="small-6 cell">
			<a href="{{ route('console_songs_most_requested') }}" class="button large expanded"><span class="fa fa-star"></span> {{ __('messages.most_requested') }}</a>
		</div>
		<div class="small-6 cell">
			<a href="{{ route('console_songs_most_recent') }}" class="button large expanded"><span class="fa fa-clock-o"></span> {{ __('messages.most_recent') }}</a>
		</div>
	</div>
@endsection
