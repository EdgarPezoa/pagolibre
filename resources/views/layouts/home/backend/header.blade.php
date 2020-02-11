<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a><img class="navbarLogo" src="{{asset('img/logo.jpeg')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Como funciona</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Empresas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Otros servicios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Cooperativo</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <a href="{{route('login')}}">Acceso Usuario (Nombre / Password)</a>
        </ul>
    </div>
</nav>