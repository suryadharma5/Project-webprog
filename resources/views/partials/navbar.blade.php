<nav class="navbar navbar-expand-lg navbar-dark navigasi">
    <div class="container">
      {{-- <a class="navbar-brand" href="/">PPTI Blog</a> --}}
      <a href="#">
        <img src="/img/logo.png" alt="" width="200" class="navbar-brand mr-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class = "nav-link active"href="/">Home</a>
          </li>
          <li li class="nav-item mx-2">
            <a class = "nav-link"href="#">Track</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Book</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Article</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Menfess</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Rating & Review</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          {{-- jika sudah login --}}
          @auth
          {{-- @dd(Auth::user()->username) --}}
            <li class="nav-item dropdown d-flex flex-row align-items-center">
              <img src="/img/profile.png" width="20" alt="" class="d-block" height="20">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{ Auth::user()->username }}
                </a> 
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i>Logout
                  </button>
                </form>
              </ul>
            </li>

          {{-- jika belum login --}}
          @else
            
              <li class="nav-item">
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right mr-3"></i>Login</a>
              </li>
            
          @endauth

        </ul>
      </div>
    </div>
</nav>