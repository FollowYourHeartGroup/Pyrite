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
            <form class="ui form login {{ $errors->count() ? 'error' : '' }}" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="First Name" value="{{ old('username') }}">
                </div>

                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="*********" value="{{ old('password') }}">
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>Keep me signed in</label>
                    </div>
                </div>
                @if ($errors->has('username'))
                    <div class="ui error message">
                        <div class="header">Could you check something!</div>
                        <p>{{ $errors->first('username') }}</p>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div class="ui error message">
                        <div class="header">Ooopsss!</div>
                        <p>{{ $errors->first('password') }}</p>
                    </div>
                @endif
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
    <script>


        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#eee"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 3,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 207.079689136843,
                        "size": 7,
                        "duration": 5,
                        "opacity": 0.5,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
        </script>
@endpush
