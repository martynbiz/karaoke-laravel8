@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			<nav aria-label="You are here:" role="navigation">
				<ul class="breadcrumbs">
					<li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
					<li>
						<span class="show-for-sr">Current: </span> {{ __('messages.songs') }}
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="grid-x grid-padding-x margin-y">
		<div class="small-12 cell">
			<form action="{{ route('console_songs') }}" method="get">
				<div class="input-group">
					<input class="input-group-field" name="query" type="text" value="{{$query}}" placeholder="Song name">
					<div class="input-group-button">
						<input type="submit" class="button" value="{{ __('messages.search') }}">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			@include('console.shared.list_songs', [ 'songs' => $songs, 'include_artist_name' => true ])

			{{ $songs->links() }}
		</div>
	</div>
@endsection
