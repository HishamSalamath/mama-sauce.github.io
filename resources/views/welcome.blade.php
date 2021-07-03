
@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <div class = "row">
        <div class = "col-md-12">
            <p class="quote">We are glad you visited us!</p>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Our Product 1</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="#">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Our Product 2</h1>
            <p>Understanding the Basics is great, but you need to be able to make the next steps.</p>
            <p><a href="#">Read more...</a></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Our product 3</h1>
            <p>Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.</p>
            <p><a href="#">Read more...</a></p>
        </div>
    </div>
    @endsection
