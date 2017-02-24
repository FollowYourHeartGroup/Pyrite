@extends('template.master',[
    'nosidebar' => true,
    'dark' => true
])

@section('content')
    <div id="module-register" class="ui two column doubling stackable grid container">
        <div class="column">
            <img src="{{ asset('images/pyrite.png') }}" class="logo" />
        </div>
        <div class="column inverted">
            <form class="ui form registration">
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>I agree to the Terms and Conditions</label>
                    </div>
                </div>
                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
