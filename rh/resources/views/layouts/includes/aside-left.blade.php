
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
       <img src="{{ asset('img/logo.png') }}" alt="RH" class="brand-image" style="opacity: .8"> 
      <span class="brand-text font-weight-light">Recursos Humanos</span>  
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(auth()->user()->image != "" and Storage::disk('public')->exists('users/'.auth()->user()->image))
            <img src="{{ asset('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" class="img-circle elevation-2">  
          @else
            <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="{{ auth()->user()->name }}">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Início</p>
            </a>
        </li> 
          @can('usuario_listar')
            <li class="nav-item">
              <a href="{{ route('usuarios') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Usuários</p>
              </a>
            </li>
          @endcan
          @can('papel_listar')
            <li class="nav-item">
              <a href="{{ route('papel') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Papéis</p>
              </a>
            </li>
          @endcan

          <li class="nav-item">
            <a href="{{ route('empresas') }}" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Empresas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('vagas') }}" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Vagas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('candidatos') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Candidatos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('curriculos') }}" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Curriculos</p>
            </a>
          </li>
          
          <!--li class="nav-item">
            <a href="{{ route('pedidos') }}" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>Pedidos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('configuracao') }}" class="nav-link">
              <i class="nav-icon fas fa-puzzle-piece"></i>
              <p>Configurações</p>
            </a>
          </li -->

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>