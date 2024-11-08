<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Akademik TI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard-mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard-dosen">Dosen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard-prodi">Prodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard-jabatan">Jabatan</a>
              </li>
          </ul>

          <ul class=" me-auto mb-2 mb-md-0">

          </ul>

          {{-- <ul class="navbar-nav">
            <li class="nav-item px-3">
                <form action="/logout" method="POST">
                @csrf
                <button class="nav-link btn btn-danger" type="submit" >
                    Logout
                </button>
                </form>
            </li>
          </ul> --}}
          <ul class="navbar-nav">
            <li class="nav-item px 3 me-5">
                <form class="d-flex" role="search" action="/dashboard-mahasiswa">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </li>
            <li class="nav-item px 3">

                      <li class="nav-item px 3">
                        <a href="/login" class="btn btn-success">Log In</a>
            </li>

          </ul>
          </form>
        </div>
      </div>
    </nav>
  </header>
