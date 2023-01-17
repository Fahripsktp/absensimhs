<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">{{ auth()->user()->name }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- <form class="d-flex">
        <input class="w-100 form-control btn-outline-danger mr-2 border-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form> --}}

        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark border-0 raunded-0 text-light" type="submit">Search</button>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">
            <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item text-light">Logout</button>
            </form>
        </a>
      </div>
    </div>
  </header>