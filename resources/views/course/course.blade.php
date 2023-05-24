<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>AgroRise</title>
        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('img/favicon.ico')}}" rel="icon">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">
    
        <link href="{{asset('css/course.css')}}" rel="stylesheet">
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
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span href="...\PPLARGO\login.php">Masuk</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <div class="container-fluid page-header" style="margin-bottom: 10px;">
                <div class="container">
                    <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                        <h3 class="display-4 text-white text-uppercase">Courses</h3>
                        <div class="d-inline-flex text-white">
                            <p class="m-0 text-uppercase text-white">Temukan Courses yang Anda Pilih dan Daftarkan Diri Anda</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
                
            <!-- Category Start -->
        
            <!-- Category Start -->
            
        
            <!-- Courses Start -->
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="text-center mb-5">
                        <h1>Courses</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-1.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/apel.png" alt="" style="height: 233px;">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">John Doe</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>5/30 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Penanaman Apel menggunakan Lahan Sempit<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-2.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/durian.jpg" alt="">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">Sumarno</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>15/20 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Pembibitan Durian menggunakan Pupuk Urea<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-3.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/sirkulasi.jpg" alt="" style="height: 233px;">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">Samsudin</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>10/20 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Sirkulasi Penanaman Jenis Tanaman di Sawah berdasarkan Musim<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-4.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/pest.jpg" alt="">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">Anton</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>12/20 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Penggunaan Pestisida dan Dosisnya pada Tanaman Sawah<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-2.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/tera1.jpg" alt="">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">Andi</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>18/20 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Pengirigasian Saluran Air Sawah dengan Teknik Terasering<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <div class="profile-img">
                                    <img src="images/team-1.jpg" alt="Profile Photo">
                                </div>
                                <img class="img-fluid" src="images/jambu.JPG" alt="">
                                <div class="bg-secondary p-4">
                                    <p class="profile-name">John Doe</p>
                                    <p class="profile-work">Dosen Universitas Jember</p>
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>0/20 Peserta</small>
                                        <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                    </div>
                                    <h5>Simulasi Penanaman Tanaman Buah Jambu menggunakan Pot<h5>
                                    <small class="m-0">Online</small>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="m-0 mr-2">Rp. 30.000</h5>
                                            <a href=""><button class="button-3" role="button">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">
                        <div class="text-center align-items-center">
                            <h6 class="mt-5">Say hi and talk to us</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                London, United Kingdom
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    010-020-0340
                                </a>
                            </p>
                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@company.com
                                </a>
                            </p>

                            
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>