<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file</title>
</head>

<body>
    <div class="container py-5">
        @foreach ($data as $item)
            <tr>
                <td>
                    @if ($item->cv)
                        <img src="{{ url('image' . '/' . $item->cv) }}" alt="cv">
                    @endif
                </td>
            </tr>
        @endforeach
    </div>
</body>

</html>


@if (Str::length(Auth::guard('pakar')->user()) > 0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">Hallo,
            {{ Auth::guard('pakar')->user()->username }}</a>

        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="/profilepakar">Profil</a></li>
            <li><a class="dropdown-item" href="/edit-password-pakar">Ubah Password</a></li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                    Logout</button>
            </form>
        </ul>
    </li>
@elseif(Str::length(Auth::guard('user')->user()) > 0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">Hallo,
            {{ Auth::guard('user')->user()->username }}</a>

        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="/profile">Profil</a></li>
            <li><a class="dropdown-item" href="/edit-password-user">Ubah Password</a></li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                    Logout</button>
            </form>
        </ul>
    </li>
@elseif(Str::length(Auth::guard('admin')->user()) > 0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">Hallo,
            {{ Auth::guard('admin')->user()->username }}</a>

        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="/profilepakar">Profil</a></li>
            <li><a class="dropdown-item" href="/edit-password-pakar">Ubah Password</a></li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </ul>
    </li>


    {{-- @elseif(Str::length(Auth::loginUsingId(10)) > 0)
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hallo, {{Auth::loginUsingId(10)->username}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item active" href="/profile">Profil</a></li>
                                <li><a class="dropdown-item" href="/edit-password-user">Ubah Password</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>               
                                    </form>
                                </li>
                            </ul>
                        </div> --}}
@else
    <div class="d-none d-lg-block">
        <a href="/mulai" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
            <i class="btn-icon bi-cloud-download"></i>
            <span href="...\PPLARGO\login.php">Masuk</span><!-- duplicated above one for mobile -->
        </a>
    </div>
@endif
