@extends('layouts.console')

@section('title', 'Settings - device')

@section('content')
    <div class="grid-x grid-padding-x margin-bottom">
        <div class="small-12 cell">
            IP address: <?= $ip ?>
        </div>
    </div>
@endsection
