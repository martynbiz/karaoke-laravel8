@extends('layouts.player')

@section('title', 'Player')

@section('content')
	<div class="grid-x grid-padding-x">
        <div class="small-12 cell text-center margin-y">
            <video width="400" controls autoplay id="video">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>
@endsection

@section('scripts')
	<script>

    $(function() {
        var video = document.getElementById("video");
        var timeout, source, currentSong;

        video.addEventListener("ended", function(e) {

            $.ajax({
                method: "DELETE",
                data: {
                    // _method: "DELETE"
                },
                url: "/console/playlist/"+currentSong.id,
                success: function(data) {
                    //...
                }
            });

        });

        var start = function() {

            clearTimeout(timeout);

            $.ajax({
                type: "GET",
                url: "/console/playlist?limit=1&format=json",
                success: function(data) {

                    // get first song
                    if (data.songs.length > 0) {

                        currentSong = data.songs[0];

                        var path = "/media" + currentSong.path;

                        if (source) {
                            if (path !== source.getAttribute("src")) {
                                source.setAttribute("src", path);
                                video.load();
                                video.play();
                            }
                        } else {
                            source = document.createElement('source');
                            source.setAttribute("src", path);
                            source.setAttribute("type", "video/mp4");
                            video.append(source);
                            video.play();
                        }

                    } else {

                        video.pause();

                    }

                    timeout = setTimeout(start, 1000);
                }
            });

        };

        start();

    });

    </script>
@endsection
