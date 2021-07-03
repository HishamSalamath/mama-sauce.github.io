{{--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="images/img_3.png" class="d-inline-block align-top" width="60" height="60">

        </a>
        <div class="navbar-nav">
            <a href="{{route('blog.index')}}" class="nav-item nav-link">Home</a>
            <a href="{{route('other.about')}}" class="nav-item nav-link">About us</a>
            <a href="{{route('blog.products')}}" class="nav-item nav-link"> Products</a>
        </div>
    </div>
</nav>
--}}

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="https://i.imgur.com/IHFfxjUm.jpg" class="d-inline-block align-top" width="70" height="70" alt="logo" >
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('blog.index')}}">Home</a></li>
            <li><a href="{{route('other.about')}}">About us</a></li>
            <li><a href="{{route('blog.products')}}">Products</a></li>
            <li><a href="">Page 3</a></li>
        </ul>
    </div>
</nav>
