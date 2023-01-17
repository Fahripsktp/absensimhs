<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container mt-1">
      <a class="navbar-brand" href="#"><font face="algerian" color="red" size="6">LARAVEL 8</font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "HOME") ? 'active' : '' }}" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "ABSENSI") ? 'active' : '' }}" href="/absensimhs">ABSENSI</a>
          </li> 
        </ul>
      </div>
      <ul class="navbar-nav">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          welcome back, {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/regismhs"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
            <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"/>
          </svg> my dashboard</a>
          <div class="dropdown-divider"></div>

              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> logout</button>
              </form>
          {{-- <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> logout</a> --}}
        </div>
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> LOGIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($active === "register") ? 'active' : '' }}" href="/register">REGISTRASI</a>
      </li>
      <form class="d-flex">
        <input class="form-control btn-outline-danger mr-2 border-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      @endauth

      </ul>
    </div>
  </nav>