<nav class="navbar navbar-expand-lg">
  <div class="container-fluid position-fixed bg-dark mt-4">
    <a class="navbar-brand text-white titleNav" href="{{route('about')}}">ALECLA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-around">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">HOME</a>
        </li>
        <li class="nav-item navPosition">
          <a class="nav-link text-white" href="{{route('index.post')}}">ITINERARI</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item text-white" href="{{route('register')}}">Registrati</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>
          @endguest
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item" href="{{route('continents.index')}}">Admin3</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('continents.create')}}">Admin2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('create.post')}}">Admin</a></li>
              <li><hr class="dropdown-divider"></li>
              <li></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="{{route('contattaci')}}">Contattaci</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a></li>
              <form method="POST" action="{{ route('logout')}} " id="logout">
                @csrf
              </form>
            </ul>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>