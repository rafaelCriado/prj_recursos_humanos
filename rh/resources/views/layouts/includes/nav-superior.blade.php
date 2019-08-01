<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white  navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Início</a>
          </li>
          
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" method="get" action="{{ route('busca')}}">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="q" type="search" placeholder="Busca" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout')}}">
              Sair <i class="nav-icon fas fa-sign-out-alt"></i>
            </a>
          </li>
        </ul>
        <!-- #include('layouts.includes.aside-right') -->
      </nav>
      <!-- /.navbar -->