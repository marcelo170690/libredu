<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/appBootstrap.css" rel="stylesheet">
  <title>CBNedu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">CBNedu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Video
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('video.create')}}">Nuevo video</a>
            <a class="dropdown-item" href="{{route('video.index')}}">Videos</a>
          </div>
        </li>
        @endauth
      </ul>
      <ul class="nav justify-content-end">
        @guest
        <li class="nav-item">
            <a class="btn btn-outline-success" href="{{ route('login') }}">
                Iniciar Sesión
            </a>
        </li>
        @endguest
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->first_name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/user/profile">Mi perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" >Cerrar Sesión</button>
                </form>
            </div>
        </li>
        @endauth
      </ul>
    </div>
  </nav>
  <div class="container">
    <br>
    <br>
    <br>
    @yield('contentBody')
  </div>
</body>
    <script src="/js/appBootstrap.js"></script>
  @yield('contentScript')
</html>
