@extends('template.master',[
    'nosidebar' => true,
    'dark' => true
])

@section('content')
    <div id="module-login" class="ui two column doubling stackable grid container">
        <div class="column">
            <img src="{{ asset('images/pyrite.png') }}" class="logo" />
        </div>
        <div class="column inverted">
            <form class="ui form login" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="*********">
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>Keep me signed in</label>
                    </div>
                </div>
                <button class="ui button" type="submit">Login to Pyrite</button>
            </form>
        </div>
    </div>

@endsection



@push('root')
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endpush
