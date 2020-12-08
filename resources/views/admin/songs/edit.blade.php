@extends('layouts.console')

@section('title', 'Songs')

@section('content')
	{!! Form::open(['url' => route('admin_songs_update'), 'method' => 'put', 'id' => 'songs-form']) !!}

        {{ csrf_field() }}

        <div class="grid-x grid-padding-x margin-bottom">
            <div class="small-12 cell margin-bottom">
                <button class="button large"><?= __('messages.update') ?></button>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="small-12 cell margin-bottom">
                <?php foreach ($songs as $song): ?>
                    <p><?= $song->name ?></p>
                <?php endforeach ?>
            </div>
        </div>
    </form>
@endsection
