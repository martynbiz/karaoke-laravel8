@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			<nav aria-label="You are here:" role="navigation">
				<ul class="breadcrumbs">
					<li><a href="{{ route('console_home') }}">{{ __('messages.home') }}</a></li>
					<li><a href="{{ route('console_songs') }}">{{ __('messages.songs') }}</a></li>
					<li>
						<span class="show-for-sr">Current: </span> {{ __('messages.most_requested') }}
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			@include('console.shared.list_songs', [ 'songs' => $songs, 'include_artist_name' => true ])
		</div>
	</div>
@endsection
