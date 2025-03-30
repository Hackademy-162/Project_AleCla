<nav class="navbar navbar-expand-lg">
  <div class="container-fluid position-fixed bg-dark text-center mt-4">
    <a class="navbar-brand text-white titleNav" href="#">ALECLA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">ITINERARI</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Benvenuto
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-white" href="{{route('create.post')}}">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-white" href="{{route('index.post')}}">Registrati</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>