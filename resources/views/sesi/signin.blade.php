@extends('layout.sesi') 
@section('title', 'signin')
@section('content')
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <i class="navbar-brand-icon bi-book me-2"></i>
            <span>AgroRise</span>
        </a>

        <div class="d-lg-none ms-auto me-3">
            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                <i class="btn-icon bi-cloud-download"></i>
                <span>Masuk</span><!-- duplicated another one below for mobile -->
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto me-lg-4">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">Course</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perhitungan</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="">Pupuk</a></li>
                        <li><a class="dropdown-item" href="">Bibit</a></li>
                        <li><a class="dropdown-item" href="">Keuntungan</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#tentang_kami">Tentang Kami</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                    <i class="btn-icon bi-cloud-download"></i>
                    <span>Masuk</span><!-- duplicated above one for mobile -->
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="bgimg">
    <div class="wrapper fadeInDown">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Pengguna </h2>
        <!-- Login Form -->
        <form action="/signin" method="post">
            @csrf
            <input type="text" id="login" class="fadeIn second @error('login') is-invalid @enderror" name="login" placeholder="Email atau Username" required autofocus value="{{ old('login') }}">
            @error('login')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
            <input type="submit" class="fadeIn fourth" value="Login">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="/signup">Daftar</a>
        </div>
    
        </div>
    </div>
</div>
@endsection