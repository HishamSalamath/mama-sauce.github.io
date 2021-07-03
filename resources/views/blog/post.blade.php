@extends('layouts.master')
@section('content')
    <link rel="image" href="images">
    <div class="row">
        <div class="col-md-12">
            <p class="pghead">{{$post['title']}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ $post['content'] }}</p>
        </div>
    </div>
@endsection
