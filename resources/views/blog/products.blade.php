@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="post-title">Our Products!</h1>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p style="font-family: 'Berlin Sans FB';font-size:large;">Our product portfolio includes Ketchup, Mayonnaise, Salad Dressings, Specialty Sauces.
                In addition to our standard services, we have participated in food exhibition and also developed more than 150 signature products under NDA(None disclosure agreement) for wide array of regional
                food service operators across verity of channels</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 img-hover-zoom">
            <img src = "images/sample1.png" class="img-circle">
        </div>
        <div class="col-md-3 img-hover-zoom">
            <img src="images/sample2.png" class="img-circle">
        </div>
        <div class="col-md-3 img-hover-zoom">
            <img src="images/sample3.png" class="img-circle">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 img-hover-zoom">
            <img src = "images/sample1.png" class="img-circle">
        </div>
        <div class="col-md-3 img-hover-zoom">
            <img src="images/sample2.png" class="img-circle">
        </div>
        <div class="col-md-3 img-hover-zoom">
            <img src="images/sample3.png" class="img-circle">
        </div>
    </div>



    <div class ="row">
        <div class="col-md-12">
        <h1 style="font-style: italic;font-size: x-large;font-family: 'Berlin Sans FB';"> We produce about 156 variety of sauces!! You can download/View the entire list below </h1>
        <a href="download.php?file=prodList" target="_blank">
            <button class="btn"><i class="fa fa-download"></i> Download File</button>
        </a>
        <a href="prodList.pdf" target="_blank">
            <button class="btn"><i class="fa fa-download"></i> View File</button>
        </a>
        </div>
    </div>



{{--
    <div class="row">
        <div class="col-md-12" style="width:fit-content;">
            <img class="center-block" src="images/prodList.png" width="60%">
        </div>
    </div>

    <hr>
--}}
@endsection

