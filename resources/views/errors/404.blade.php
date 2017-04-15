@extends('template.master',[
    'nosidebar' => true,
    'dark' => true
])

@section('content')
    <div id="module-login" class="ui grid container">
        <h1 class="ui center grey inverted aligned icon header">
            <i class="massive spy icon"></i>
            Page not found
        </h1>
    </div>

@endsection



@push('root')
    <!-- particles.js container -->
    <div id="particles-js"></div>
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endpush
