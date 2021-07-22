<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/tc-menu-4.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" style="color: var(--bs-gray-dark);background: var(--bs-dark);">
        <div class="container"><a class="navbar-brand logo" href="#">Logo</a><img src="assets/img/esq_logo.png" style="width: 100px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav" style="background: var(--bs-white);border-radius: 45px;">
                <ul class="tc-menu-4">
                    <li class="@yield('home')"><a href="/">INÍCIO</a></li>
                    <li><a href="#">sobre nós</a></li>
                    <li><a href="#">Actividades</a></li>
                    <li></li>
                    <li class="@yield('musica')"><a href="#">Mídia</a>
                        <ul>
                            <li><a href="{{ route('musicas') }}"><br>Musicas<br></a></li>
                            <li><a href="#"><br>Videos &amp; Fotos&nbsp;<br></a></li>
                        </ul>
                    </li>
                    <li><a href="#">TORNE-SE UM MEMBRO</a></li>
                </ul>
                <ul class="navbar-nav ms-auto"></ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        @yield('content')
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
