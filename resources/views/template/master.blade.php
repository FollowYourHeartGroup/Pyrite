<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title','Pyrite - Dashboard')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/pyrite.css') }}">
    @stack('styles')
</head>
<body class="
{{ isset($dark) && $dark ? 'dark' : '' }}
">

@stack('root')

@if(!$nosidebar)
    <div class="ui sidebar visible inverted vertical menu">
        <a class="item">
            <i class="home icon"></i>
            Home
        </a>
        <a class="item">
            <i class="block layout icon"></i>
            Topics
        </a>
        <a class="item">
            <i class="smile icon"></i>
            Friends
        </a>
    </div>
    <div class="pusher">
        <div id="app">
            @yield('content')
        </div>
    </div>
@else
    <div id="app">
        @yield('content')
    </div>
@endif
<script>
window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token(), ]) !!};
</script>
@stack('scripts')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/pyrite.js') }}"></script>
</body>
</html>
