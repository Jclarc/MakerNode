@extends('layouts.master')

@section('title')
        WELCOME!
    @endsection

@section('content')
        <h1 class="center">MAKERNODE</h1>

        <div>@if
            @include('include.signup')
        </div>

    @endsection