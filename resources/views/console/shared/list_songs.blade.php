<ul class="songs-list">
	@foreach ($songs as $song)
		<li>
			<a href="{{ route('console_songs_view', ['id' => $song->id]) }}" class="button expanded large">
				@if (@$include_artist_name)
					{{$song->artist->name}} - <strong>{{$song->name}}</strong>
				@else
					<?= $song->name ?>
				@endif
			</a>
		</li>
	@endforeach
</ul>
