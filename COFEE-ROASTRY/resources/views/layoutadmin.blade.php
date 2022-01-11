<!DOCTYPE html>
<html>
    <head>
        <title>@yield('juduladmin')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="/css/layout.css">

        <script>
            function totalIt() {
                var input = document.getElementsByName("harga[]");
                var input2 = document.getElementsByName("jumlah[]");
                var total = 0;
                for (var i = 0; i < input.length; i++) {
                    if (input[i].checked) {
                    total += parseFloat(input[i].value * input2[i].value);
                    }
                }
                document.getElementById("total").value = total;
            }
        </script>


    </head>
<body>
@auth

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="https://i.ibb.co/Z2c6KpC/Whats-App-Image-2021-12-23-at-11-49-53-removebg-preview-2.png" alt="Logo" height="60px" width="90px" class="img-fluid" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/pesanan">Pesanan</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            <div class="d-flex">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selamat datang, {{ auth()->user()->nama_lengkap }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                    </li>
            </div>
            </ul>
        </div>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="https://i.ibb.co/Z2c6KpC/Whats-App-Image-2021-12-23-at-11-49-53-removebg-preview-2.png" alt="Logo" height="60px" width="90px" class="img-fluid" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pesanan</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            <div class="d-flex">
                <a href="{{ url('/login')}}"><h5><i class="fas fa-sign-in-alt text-light m-2"> Login</i></h5></a>
            </div>
            </ul>
        </div>
    </div>
</nav>
@endauth

<div class="container" style="margin-top:90px">
    @yield('sectionadmin')
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