<!DOCTYPE html>
<html>
    <head>
        <title>@yield('judul')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="/css/layout.css">


    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="https://i.ibb.co/n7zW8r4/30e1d5ea-e6f5-4f89-8d26-fade422acd40.jpg" alt="Logo" height="30px" width="40px" class="img-fluid" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/product')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aboutus')}}">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        View More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                        <li><a class="dropdown-item" href="#">Web Designing</a></li>
                        <li><a class="dropdown-item" href="#">Android Development</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <h5><i class="fas fa-shopping-cart text-light m-2"></i></h5>
                <h5><i class="fas fa-bell text-light m-2"></i></i></h5>
                <a href="{{ url('/login')}}"><button class="btn btn-light ms-3">Login</button></a>
            </div>
        </div>
    </div>
</nav>
<div class="container" style="margin-top:90px">
    @yield('section')
</div>
</body>
<footer class="text-center" style="margin-top: 120px;" id="background">      
    <div class="text-center p-3" id="warnafooter">
    <div>
        &copy;2021 Copyright: Cofee Roastery
    </div>
    </div>    
</footer>
</html>