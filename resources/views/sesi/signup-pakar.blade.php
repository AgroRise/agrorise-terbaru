@extends('layout.sesi')
@section('title', 'signup-pakar')
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto me-lg-4">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Course</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Perhitungan</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/pupuk-urea">Pupuk</a></li>
                            <li><a class="dropdown-item" href="/pestisida">Pestisida</a></li>
                            <li><a class="dropdown-item" href="/keuntungan">Keuntungan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/#tentang_kami">Tentang Kami</a>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="/login" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                        <i class="btn-icon bi-cloud-download"></i>
                        <span>Masuk</span><!-- duplicated above one for mobile -->
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bgimg">
        <div class="wrapper fadeInDown">
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2 class="active"> Mendaftar Pakar</h2>
                <!-- Login Form -->
                <form action="/signup-pakar" method="post">
                    @csrf
                    <input type="email" id="email" class="fadeIn second @error('email') is-invalid @enderror"
                        name="email" placeholder="Email" required autofocus value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="nama" class="fadeIn second @error('nama') is-invalid @enderror"
                        name="nama" placeholder="Nama Lengkap" required value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="username" id="username" class="fadeIn second @error('username') is-invalid @enderror"
                        name="username" placeholder="Username" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="password" id="password" class="fadeIn third" name="password_confirmation"
                        placeholder="Konfirmasi Password" required>
                    {{-- @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
                    <input type="text" id="no_telepon" class="fadeIn second @error('no_telepon') is-invalid @enderror"
                        name="no_telepon" placeholder="Nomor Telepon" required>
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="alamat" class="fadeIn third @error('alamat') is-invalid @enderror"
                        name="alamat" placeholder="Alamat" required>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="pendidikan_terakhir"
                        class="fadeIn second @error('pendidikan_terakhir') is-invalid @enderror"
                        name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
                    @error('pendidikan_terakhir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="pekerjaan" class="fadeIn third @error('pekerjaan') is-invalid @enderror"
                        name="pekerjaan" placeholder="Pekerjaan" required>
                    @error('pekerjaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="instansi" class="fadeIn third @error('instansi') is-invalid @enderror"
                        name="instansi" placeholder="Instansi" required>
                    @error('instansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" id="alamat_instansi"
                        class="fadeIn second @error('alamat_instansi') is-invalid @enderror" name="alamat_instansi"
                        placeholder="Alamat Instansi" required>
                    @error('alamat_instansi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label>CV (format dalam bentuk .pdf)<br><input type="file" id="cv"
                            class="fadeIn third @error('cv') is-invalid @enderror" name="cv" placeholder="CV"
                            required>
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>
                    <label>Sertifikat (format dalam bentuk .pdf)<br><input type="file" id="sertifikat"
                            class="fadeIn third @error('sertifikat') is-invalid @enderror" name="sertifikat"
                            placeholder="Sertifikat" required>
                        @error('sertifikat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <input type="submit" class="fadeIn fourth" value="Daftar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Masuk</a>
                </div>

            </div>
        </div>
    </div>
@endsection
