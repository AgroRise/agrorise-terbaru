<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>AgroRise - Login Main</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/profile.css" rel="stylesheet">
<!--



-->
    </head>
    
    <body>

        <main>
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
                                <a class="nav-link click-scroll" href="#section_5">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Hallo, {{ Auth::guard('pakar')->user()->username }}</a>
                            </li>
                        </ul>

                        {{-- <div class="d-none d-lg-block">
                            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span>Masuk</span><!-- duplicated above one for mobile -->
                            </a>
                        </div> --}}
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="150">
                                        <div class="mt-3">
                                            <h4>{{ old('username', Auth::guard('pakar')->user()->username)}}</h4>
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button class="btn btn-primary">Logout</button>               
                                            </form>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="/update-pakar" method="post">
                                        @method("put")
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="email" readonly name="email" class="form-control" value="{{ old('email', Auth::guard('pakar')->user()->email)}}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', Auth::guard('pakar')->user()->username)}}" autofocus>
                                                @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama Lengkap</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', Auth::guard('pakar')->user()->nama)}}">
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">No. Telepon</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon', Auth::guard('pakar')->user()->no_telepon)}}">
                                                @error('no_telepon')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', Auth::guard('pakar')->user()->alamat)}}">
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Pendidikan Terakhir</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" value="{{ old('pendidikan_terakhir', Auth::guard('pakar')->user()->pendidikan_terakhir)}}">
                                                @error('pendidikan_terakhir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Pekerjaan</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan', Auth::guard('pakar')->user()->pekerjaan)}}">
                                                @error('pekerjaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Instansi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="instansi" class="form-control @error('instansi') is-invalid @enderror" value="{{ old('instansi', Auth::guard('pakar')->user()->instansi)}}">
                                                @error('instansi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat Instansi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="alamat_instansi" class="form-control @error('alamat_instansi') is-invalid @enderror" value="{{ old('alamat_instansi', Auth::guard('pakar')->user()->alamat_instansi)}}">
                                                @error('alamat_instansi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <button class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="button" class="btn btn-primary px-4" value="Save">
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>