@extends('layouts.master')

@section('title')
    WELCOME!
@endsection

@section('content')
    <div class="spacer">
        <br><br>
    </div>
    <h1 class="center">MAKERNODE</h1>
    <div class="parallax-container">
        <div class="parallax"><img src="resources\assets\images\circuits-6.jpg"></div>
    </div>
        <div>
            @include('include.signup')
        </div>
    <div class="parallax-container">
        <div class="parallax"><img src="resources\assets\images\circuits-6.jpg"></div>
    </div>
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
            $(".dropdown-button").dropdown();
        });
    </script>


@endsection