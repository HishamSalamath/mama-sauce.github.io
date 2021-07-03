@extends('layouts.master')

@section('content')

    <style>
        .head
        {
            height:400px;
            line-height: 400px;
            text-align: center;
            background: url(images/ketchup-sachets-01.jpg) rgba(0,0,0,0.2);
            background-size: 100%100%;
            border: #4a5568;
            backdrop-filter: blur(20px);

        }

        .about{
            height:300px;
            text-align: center;
            background: url(images/about.jpg);
            background-size: 100%100%;

        }

        .expert{
            height:300px;
            text-align:center;
            background: url(images/design-dark-texture-wallpaper-preview.jpg);
            background-size: 100%100%;
            backdrop-filter: blur(5px);

        }

        li{
            color: white;
        }

        .bg-gradient{
            background-image: linear-gradient(to right, red , white);
            height:300px;
        }

    </style>


{{--
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/ketchup-sachets-01.jpg" alt="Los Angeles" >
            </div>

            <div class="item">
                <img src="images/img_2.png" alt="Chicago" >
            </div>

            <div class="item">
                <img src="images/img_3.png"alt="blah blah">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
--}}

    <div class="bs-example">
        <div id="myCarousel" class="carousel slide" data-interval="6500" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item carousel-fade">
                    <img src="images/slider1.bmp">
                    <h2>Slide 1</h2>
                    <div class="carousel-caption">
                        <h3>Welcome to Mama Sauce Factory for Food Industries!!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="item carousel-fade">
                    <img src="images/ketchup-sachets-01.jpg" alt="Los Angeles" style="width:fit-content;" >
                    <h2>Slide 2</h2>
                    <div class="carousel-caption">
                        <h3 style="color: black;font-family: 'Berlin Sans FB';font-style: italic;">Well if you are looking for mind craving delicious variety of sauces that baffle up your taste buds ,
                            you have reached the right destination!</h3>
                        <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                    </div>
                </div>
                <div class="item carousel-fade">
                    <img src="images/sauces.png" alt="Los Angeles" >
                    <h2>Slide 3</h2>
                    <div class="carousel-caption">
                        <h3>Third slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>



    <hr style="border: hidden;background: white;">

    <div class="row about">
        <div class="col-md-12 padding-0">
            <H1 style="text-align: center;font-size: xx-large;font-family: Algerian;">Who are we??</H1>
               <p style="color: white;font-size: large;">
                   We are Mama Sauce Factory For Food Industries, a family-owned company with more than 100 hard-working staff members focussing to provide you
                   with delicious sauces keeping hygiene in mind.
               </p>
            <h4 style="color: black;">Curious to know more about us!? </h4>
            <p><a href="{{route('other.about')}}" style="color: black; font-size: x-large;">
                    <button type="button" class="btn btn-info">Let's goo..</button>
                </a></p>
        </div>

    </div>
    <hr style="border: hidden;background: white;">

   <div class="row"></div>

    <div class="row expert">
        <div class="col-md-12 text-center">
            <h1 style="text-align: center;font-size: xx-large;font-family: Algerian; color: white">Our Expertise</h1>
            <p style="color: white;font-size: large;">
                Over the recent years, MAMA SAUCE  has become one of the competitive and experienced supplier of sauces in the QSR and Food Service markets all over the GCC.
                Our product portfolio includes Ketchup, Mayonnaise, Salad Dressings, Specialty Sauces.

                In addition to our standard services, we have participated in food exhibition and also developed more than 150 signature products under NDA(None disclosure agreement) for wide array of regional food service operators across verity of channels.

            </p>

            <ol>
                <li> QSR (Quick Service Restaurant)</li>
                <li> CDR ( Casual Dinning Restaurant)</li>
                <li> FDR ( Fine Dinning Restaurant)</li>
                <li>HORECA MARKET  ( Hotel, Restaurants, Catering.)</li>
            </ol>




        </div>

    </div>


<hr>
    <hr>

    <div class="row bg-gradient">
        <h1 class = "post-title text-center">
            Let's have a look on our Our Top Products!
        </h1>

        <hr style=border:none;>
        <div class="col-md-6 text-center ">
            <h1 class="post-title"> product 1 </h1>
            <p>This is consumer's favourite product in market,to know more in detail click below</p>
            <p><a href="{{ route('blog.post', ['id' => 1]) }}">
                    <button type="button" class="btn btn-info">Read more</button>
                </a></p>
        </div>
        <div class="col-md-6 text-center">
            <h1 class="post-title">product 2</h1>
            <p>This is consumer's favourite product in market,to know more in detail click <below></below></p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">
                    <button type="button" class="btn btn-info">Read more</button>
                </a></p>
        </div>
    </div>
    <hr style="border: hidden;background: white;">

{{--
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">product 2</h1>
            <p>This is consumer's favourite product in market,to know more in detail click <below></below></p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">
                    <button type="button" class="btn btn-info">Read more</button>
                </a></p>
        </div>
        --}}
        <hr style="border: hidden;background: white;">
        <hr style="border: hidden;background: white;">

        <div class="row"></div>

    <hr style="border: hidden;background: white;">


    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title"> Our Valuable Clients! </h1>
        </div>
    </div>
        <hr style="border: hidden;background: white;">
        <hr style="border: hidden;background: white;">

        <div class="row"></div>

        <div class="row">
            <div class="col-md-2 ">
                <h1> <img src="images/herfy.png" width="50%"> </h1>
            </div>

             <div class="col-md-2">
                <h1> <img src="images/client2.png" width="50%"> </h1>
            </div>

            <div class="col-md-2 ">
                <h1> <img src="images/Client3.png" width="50%"> </h1>
            </div>

            <div class="col-md-2 ">
                <h1> <img src="images/client4.png" width="50%"> </h1>
            </div>

            <div class="col-md-2 ">
                <h1> <img src="images/client5.png" width="50%"> </h1>
            </div>

            <div class="col-md-2 ">
                <h1> <img src="images/client6.png" width="50%"> </h1>
            </div>

    </div>

        <div class="row justify-content-between">
            <div class="col-md-2">
                <h1> <img src="images/client7.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client8.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client9.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client10.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client11.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client12.png" width="50%"> </h1>
            </div>

        </div>

        <div class="row justify-content-between">

            <div class="col-md-2">
                <h1> <img src="images/client13.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client14.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client15.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client16.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client17.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client18.png" width="50%"> </h1>
            </div>

        </div>


        <div class="row justify-content-between">

            <div class="col-md-2">
                <h1> <img src="images/client19.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client20.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client21.png" width="50%"> </h1>
            </div>

            <div class="col-md-2">
                <h1> <img src="images/client22.png" width="50%"> </h1>
            </div>

        </div>





@endsection
