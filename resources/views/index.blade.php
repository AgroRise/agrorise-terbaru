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

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/landing.css" rel="stylesheet">
<!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

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
                                    <li><a class="dropdown-item" href="/pestisida">Pestisida</a></li>
                                    <li><a class="dropdown-item" href="/keuntungan">Keuntungan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Tentang Kami</a>
                            </li>
                        </ul> 

                        @if(Str::length(Auth::guard('pakar')->user()) > 0)
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{Auth::guard('pakar')->user()->username}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="/profilepakar">Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>               
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @elseif(Str::length(Auth::guard('user')->user()) > 0)
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{Auth::guard('user')->user()->username}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="/profile">Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>               
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @else
                        <div class="d-none d-lg-block">
                            <a href="/mulai" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span href="...\PPLARGO\login.php">Masuk</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                        @endif                        
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex flex-warp justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="land justify-content-center align-items-center col-12 text-center ">
                            
                            <h6>Selamat Datang di Website</h6>

                            <h1 class="text-white mt-3 mb-4">AgroRise</h1>
                            <p class="text-white">Website penyedia layanan forum untuk berdiskusi mengenai hal AgroIndustri dan layanan Pencatatan Data</p>

                            <a href="/mulai" class="btn custom-btn smoothscroll me-3 mt-3">Mulai</a>
                        </div>
                    </div>
                </div>
            </section>


            

            <section class="py-lg-5"></section>


            <section>
                <div class="container">
                    <div class="row">

                                             

                        <div class="text-center align-items-center">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                                <div class="scrollspy-example-item" id="item-1">
                                    <h5>Introducing ebook</h5>

                                    <p>This ebook landing page is good to use for any purpose. This layout is based on Bootstrap 5 CSS framework.</p>

                                    <p><strong>What is Content Marketing?</strong> If you are wondering what content marketing is all about, this is the place to start.</p>

                                    <p>When you need free HTML CSS templates, please visit Templatemo website which provides a variety of templates.</p>
                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>Win back your time</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci.</p>

                                    <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-3">
                                            <img src="images/portrait-mature-smiling-authoress-sitting-desk.jpg" class="scrollspy-example-item-image img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-6 col-12 mb-3">
                                            <img src="images/businessman-sitting-by-table-cafe.jpg" class="scrollspy-example-item-image img-fluid" alt="">
                                        </div>
                                    </div>

                                
                                </div>

                                
                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>Habits</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p>You are not allowed to redistribute this template ZIP file on any other template collection website. Please contact TemplateMo for more information.</p>

                                    <p><strong>What is Free CSS Templates?</strong> Free CSS Templates are a variety of ready-made web pages designed for different kinds of websites.</p>

                                    <p>You may browse TemplateMo website for more CSS templates. Thank you for visiting our website.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/portrait-mature-smiling-authoress-sitting-desk.jpg" class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6>Meet Author</h6>

                            <h2 class="mb-4">Prof. Sophia</h2>

                            <p>This is an ebook landing page template with Bootstrap 5 CSS framework. It is easy to customize with the use of Bootstrap CSS classes.</p>

                            <p>Lorem ipsum dolor sit amet, consive adipisicing elit, sed do eiusmod. tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="reviews-section section-padding" id="section_4">
            <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mt-5">
                            <img src="images/land2.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">

                                <h2 class="mb-3">Tentang Kami</h2>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos ex suscipit veritatis hic, error rerum earum vitae sint! Perferendis quibusdam veritatis molestiae dicta odit voluptatum, sit sequi dolorum. Laudantium!.</p>

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, molestiae. Voluptates repudiandae quis totam a, aperiam hic, repellat dicta quibusdam numquam ipsum mollitia laudantium eos provident dolor esse eum delectus!</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


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

    </body>
</html>