<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>AgroRise - Admin-pakar</title>

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
                <div class="container">
                    <div class="main-body">
                    {{-- {{json_encode($data)}} --}}
                        <div class="row">
                            <div class="col-lg-4">
                                <table class="table">
                                    <thead class="data">
                                        <tr>
                                            <th>id</th>
                                            <th>email</th>
                                            <th>nama</th>
                                            <th>username</th>
                                            <th>nomor telepon</th>
                                            <th>alamat</th>
                                            <th>pendidikan terakhir</th>
                                            <th>pekerjaan</th>
                                            <th>instansi</th>
                                            <th>alamat instansi</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->email}}</td>                                 
                                                <td>{{$item->nama}}</td>                                 
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->no_telepon}}</td>                                 
                                                <td>{{$item->alamat}}</td>                                 
                                                <td>{{$item->pendidikan_terakhir}}</td>                                 
                                                <td>{{$item->pekerjaan}}</td>                                 
                                                <td>{{$item->instansi}}</td>                                 
                                                <td>{{$item->alamat_instansi}}</td>    
                                                <td><a class="btn btn-secondary btn-sm" href="/file">Detail</a></td>                                                             
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$data->links()}}
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

{{-- <table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>                                 
            </tr>
        @endforeach
    </tbody>
</table> --}}