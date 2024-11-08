
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ url('/mahasiswa') }}">
                <i class="bi bi-house"></i>
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/mhs-index') }}">
                <span data-feather="file"></span>
                <i class="bi bi-person-fill"></i>
                Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dsn-index') }}">
                <span data-feather="shopping-cart"></span>
                <i class="bi bi-person-video3"></i>
                Dosen
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/prd-index') }}">
                <span data-feather="users"></span>
                <i class="bi bi-heart-pulse-fill"></i>
                Prodi
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/jbt-index') }}">
                  <span data-feather="users"></span>
                  <i class="bi bi-heart-pulse-fill"></i>
                  Jabatan
                </a>
              </li>

            @can('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user') }}">
                  <span data-feather="users"></span>
                  <i class="bi bi-people-fill"></i>
                  Users
                </a>
              </li>
            @endcan

            <hr class="">
            <li class="nav-item ml-2">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="nav-link btn logout" type="submit" >
                        Logout
                    </button>
                    </form>
              </li>
          </ul>
        </div>
      </nav>
