<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Karaoke - @yield('title')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="top-bar margin-bottom padding-y" data-sticky data-options="marginTop:0;">
            <div class="top-bar-left">
                <a href="{{ route('console_home') }}" class="button large glossy-button glossy-button--primary"><span class="fa fa-search"></span> {{ __('messages.main_menu') }}</a>
            </div>
            <div class="top-bar-right">
                <a href="{{ route('console_playlist') }}" class="button large glossy-button glossy-button--primary"><span class="fa fa-sign-out"></span> {{ __('messages.playlist') }}</a>

                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="button large glossy-button glossy-button--primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> {{ __('messages.logout') }}</a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                @else
                    <a href="{{ url('/login') }}" class="button large glossy-button glossy-button--primary"><span class="fa fa-sign-in"></span> {{ __('messages.login') }}</a>
                @endif
            </div>
        </div>

        <div class="grid-container">
            @if ($successMsg = session('success_message'))
                <p class="success-message">{{$successMsg}}</p>
            @endif

            @if ($errorMsg = session('error_message'))
                <p class="error-message">{{$errorMsg}}</p>
            @endif

            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>

        $(function() {

            $(".callout").not(".callout-important").delay(3000).slideUp(300);

            $(document).foundation();

        });

        </script>
    </body>
</html>
