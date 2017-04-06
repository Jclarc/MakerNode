@extends('layouts.master')

@section('title')
    Profile!
@endsection

@section('content')
    <div class="spacer">
        <br><br>
    </div>
    <div class="row">
        <div class="col s12 m7 l3">
            <div class="card medium">
                <div class="card-image">
                    <img src="https://cdn.meme.am/cache/instances/folder562/500x/55758562.jpg">
                </div>
                <div class="card-content">
                    <p>Basic user profile/bio can go here along with contact links down below.</p>
                </div>
                <div class="card-action">
                    <a class="light-green-text text-accent-2" href="#">Social Link</a><br>
                    <a class="light-green-text text-accent-2" href="#">Social Link</a> <br>
                    <a class="light-green-text text-accent-2" href="#">Social Link</a>
                </div>
            </div>
        </div>
        <div class="col s12 m7 l4">
            <div class="card medium">
                <span class="card-title">Project 1</span>
                <div class="card-image">
                    <img src="http://bitscope.com/blog/EK/46-FB26H.jpg">
                </div>
                <div class="card-content">
                    <p>Project information.</p>
                </div>
                <div class="card-action">
                    <a class="light-green-text text-accent-2" href="#">Project forum Link</a><br>
                    <a class="light-green-text text-accent-2" href="#">Git Link</a> <br>
                </div>
            </div>
        </div>
    </div>
@endsection