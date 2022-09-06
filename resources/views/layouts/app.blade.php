<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <!-- Page Heading -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('/img/Logo.png') }}" alt="" width="80" height="80"> WEB STORE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                        </li>

                        @if (Route::has('login'))
                        <li class="nav-item">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link text-white">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="nav-link text-white">Log in</a>

                        </li>
                        
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                            @endif                        
                        </li>
                        @endif                        
                     @endif                            
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="#">Action</a></li>
                                <li><a class="dropdown-item " href="#">Another action</a></li>
                                <li><a class="dropdown-item \" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                            </ul>
                        </li>
                        
        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
        <!-- Page Content -->
            {{ $slot }}
        
        
            <div class="container-fluid bg-dark text-body footer">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">DIRECCIONES<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Llavallol, ARGENTINA, BS. AS.</p>
                        <p><i class="fa fa-phone-alt me-3"></i> +54 (011) 15-1395-4071</p>
                        <p><i class="fa fa-envelope me-3"></i>info@webstore.app</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link text-white" href="">About</a>
                        <a class="btn btn-link text-white" href="">Contact</a>
                        <a class="btn btn-link text-white" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white" href="">Terms & Conditions</a>
                        <a class="btn btn-link text-white" href="">Support</a>
                    </div>
                    <div class="col-md-6 col-lg-3 list-group">
                        <p class="section-title list-group-item h5 mb-4">Community<span></span></p>
                        <a class="btn btn-link text-white list-group-item" href="">Career</a>
                        <a class="btn btn-link text-white list-group-item" href="">Leadership</a>
                        <a class="btn btn-link text-white list-group-item" href="">Strategy</a>
                        <a class="btn btn-link text-white list-group-item" href="">History</a>
                        <a class="btn btn-link text-white list-group-item" href="">Components</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Recibí las ofertas, promociones oportunidades de inversion detalladas en tu mail.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
