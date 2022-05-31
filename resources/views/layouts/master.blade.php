<html>

<head>
    <title>La libreria del rol - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64180a2ba1.js" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <h2 class="visually-hidden">La libreria del rol</h2>
    <a class="visually-hidden-focusable" href="#content">Ir al contenido principal</a>

</head>

<body class="bg-dark">
    @section('sidebar')
        <nav id="topheader" class="navbar navbar-expand-sm bg-dark navbar-dark text-white-50 border-bottom">
            <div class="container-fluid pt-2">
                <a class="navbar-brand" href="{{ route('main') }}"><img src="{{ URL::asset('storage/logo.png') }}"
                        alt="Logo"></a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Usuario</a>
                        <ul class="dropdown-menu">
                            @if (Auth::check())
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Tu perfil</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout.perform') }}">Desconectar</a></li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Identificarme</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrarme</a></li>
                            @endif

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('main') }}">Inicio</a>
                    </li>
                    @if (Auth::check())
                        @if (Auth::user()->admin)
                            <li class="nav-item">
                                <a href="{{ route('admin') }}" class="nav-link">Administración</a>
                            </li>
                        @endif
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sistemas') }}">Sistemas de juego</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles') }}">Noticias de los TTRPG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subs.index') }}">Foro</a>
                    </li>
                </ul>
            </div>
        </nav>
    @show


    @yield('content')

</body>

<footer class="text-center text-lg-start text-white-50 bg-dark border-top">
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section>
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        La librería del rol
                    </h6>
                    <p>
                        Esta página ha sido creada con el objetivo de aprobar el TFG. Espero que sea de vuestro agrado.
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Principales TTRPG</h6>
                    <p>
                        <a href="https://dnd.wizards.com/" class="text-white-50-50">Dungeons and Dragons</a>
                    </p>
                    <p>
                        <a href="https://paizo.com/pathfinder" class="text-white-50">Pathfinder / Starfinder</a>
                    </p>
                    <p>
                        <a href="https://warhammer40000.com/es/" class="text-white-50">Warhammer 40000</a>
                    </p>
                    <p>
                        <a href="https://www.reddit.com/r/titanworldrpg/" class="text-white-50">Titan world</a>
                    </p>
                </div>
                <hr class="w-100 clearfix d-md-none" />

                <hr class="w-100 clearfix d-md-none" />

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                    <p><i class="fas fa-envelope mr-3"></i> pedrojimenezlujan1@gmail.com</p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Seguidnos en redes</h6>


                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee"
                        href="https://twitter.com/Mukemukechu" target="_blank" role="button"><i
                            class="fab fa-twitter"></i></a>


                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac"
                        href="https://instagram.com/pedrojimeluj" role="button" target="_blank"><i
                            class="fab fa-instagram"></i></a>


                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333"
                        href="https://github.com/BanMePlox" role="button" target="_blank"><i
                            class="fab fa-github"></i></a>


                </div>
            </div>

        </section>
    </div>
</footer>

</html>
