<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css')}}">
    <title>Blog</title>
</head>
<body>
        <!--header nav-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
            <div class="container-xl">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img src="{{ url('/assets/images/logo.png') }}" class="h-2" alt="...">
                </a>
                <!-- Navbar toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Nav -->
                    <div class="navbar-nav mx-lg-auto">
                        <a class="nav-item nav-link active" href="/" aria-current="page">Home</a>
                        <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                    </div>
                    <!-- Right navigation -->
                    <div class="navbar-nav ms-lg-4">
                            @if(Auth::check())
                                <a class="nav-item nav-link" href="{{ route('logout') }}">
                                    Log Out
                                </a>
                            @else
                                <a class="nav-item nav-link" href="{{ route('login') }}">
                                    Sign in
                                </a>
                        @endif
                    </div>
                    <!-- Action -->
                    <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                        <a href="{{ route('register') }}" class="btn btn-sm btn-primary w-full w-lg-auto">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!--header nav end-->
        @if (Session::get('error-msg'))
            <div class="error-msg btn-danger alert m-5">
                {{Session::get('error-msg')}}
            </div>
        @endif
        @if (Session::get('msg'))
            <div class="success-msg btn-success alert m-5">
                {{Session::get('msg')}}
            </div>
        @endif