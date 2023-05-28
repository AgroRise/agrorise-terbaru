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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/video.css" rel="stylesheet">


</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
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
                            <a class="nav-link text click-scroll" href="/course">Kursus</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Perhitungan</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="/pupuk-urea">Pupuk</a></li>
                                <li><a class="dropdown-item" href="/pestisida">Pestisida</a></li>
                                <li><a class="dropdown-item" href="/keuntungan">Keuntungan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#tentang_kami">Tentang Kami</a>
                        </li>
                    </ul>

                    @if (Str::length(Auth::guard('pakar')->user()) > 0)
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle text-light" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{ Auth::guard('pakar')->user()->username }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/profilepakar">Profil</a></li>
                                <li><a class="dropdown-item" href="/edit-password-pakar">Ubah Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @elseif(Str::length(Auth::guard('user')->user()) > 0)
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle text-light" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{ Auth::guard('user')->user()->username }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/profile">Profil</a></li>
                                <li><a class="dropdown-item" href="/edit-password-user">Ubah Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @elseif(Str::length(Auth::guard('admin')->user()) > 0)
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle text-light" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{ Auth::guard('admin')->user()->username }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/profileadmin">Profil</a></li>
                                <li><a class="dropdown-item" href="/file">Database Pengguna</a></li>
                                <li><a class="dropdown-item" href="/filepakar">Database Pakar</a></li>
                                <li><a class="dropdown-item" href="/edit-password-admin">Ubah Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="d-none d-lg-block">
                            <a href="/login" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span href="...\PPLARGO\login.php">Masuk</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
        <div class="containerdesc">
            <div class="row">
                <div class="col-6">
                    <h5>Penanaman Bibit Apel dengan menggunakan lahan sempit</h5>
                    <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem
                        vitae possimus neque sed delectus.
                        Qui error ea maxime porro voluptatem eligendi dolor unde molestiae alias, quisquam totam cumque
                        vitae. Sunt! Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Maxime exercitationem neque fugit amet, reiciendis esse placeat nulla assumenda, nisi maiores
                        quisquam excepturi non, adipisci minima molestiae consectetur sequi! Saepe, reprehenderit.</p>
                </div>
                <div class="col-6">
                    <div class="containercard">
                        <div class="card-template card-template-1">
                            <div class="left-part">
                                <img alt="left-circular-image" src="images/team-1.jpg" width="100%" />
                            </div>
                            <div class="right-part">
                                <p class="profile-name">John Doe</p>
                                <p class="profile-work">Dosen Universitas Jember</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="containervid">
            <div class="main-video">
                <div class="video">
                    <video src="https://res.cloudinary.com/codelife/video/upload/v1637805738/intro_l5ul1k.mp4" controls
                        autoplay></video>
                    <h3 class="title">01. Title</h3>
                </div>
            </div>
            <div class="video-list">
                <div class="vid active">
                    <video src="https://res.cloudinary.com/codelife/video/upload/v1637805738/intro_l5ul1k.mp4" controls
                        muted></video>
                    <h3 class="title">01. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">02. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">03. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">04. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">04. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">04. Title</h3>
                </div>
                <div class="vid">
                    <video src="videos\-Main Comp 1-1.m4v" controls muted></video>
                    <h3 class="title">04. Title</h3>
                </div>
            </div>
        </div>

        <footer class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">
                    <div class="text-center align-items-center">
                        <h6 class="mt-5">Hello and talk to us</h6>
                        <h2 class="mb-4">Kontak</h2>
                        <p>
                            <a href="mailto:agrorise2023@gmail.com" class="contact-link">
                                agrorise2023@gmail.com
                            </a>
                        </p>
                        <p class="mb-3">
                            <i class="bi-geo-alt me-2"></i>
                            Jember, Jawa Timur
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

    <script>
        let listvideo = document.querySelectorAll('.video-list .vid')
        let mainvideo = document.querySelector('.main-video video')
        let title = document.querySelector('.main-video .title')

        listvideo.forEach(video => {
            video.onclick = () => {
                listvideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainvideo.src = src;
                    let text = video.children[1].innerHTML;
                    tittle.innerHTML = text;
                };
            };
        });
    </script>
</body>

</html>
