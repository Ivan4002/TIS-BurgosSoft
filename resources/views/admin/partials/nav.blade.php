      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
                <span class="right badge badge-success">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link {{ Route::current()->getName() == 'admin.posts.index' ? 'active' : '' }}
                                        {{ Route::current()->getName() == 'admin.posts.create' ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
                    <p>
                      Convocatoria
                      <i class="right fas fa-angle-left"></i>
                    </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a {{ request()->is('admin3/posts') ? 'active' : '' }} href="{{route('admin.posts.index')}}"
                class="nav-link {{ Route::current()->getName() == 'admin.posts.index' ? 'active' : '' }}">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver Convocatoria</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{route('admin.posts.create')}}" class="nav-link {{ Route::current()->getName() == 'admin.posts.create' ? 'active' : '' }}">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Crear una Convocatoria</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link {{ Route::current()->getName() == 'admin.users.index' ? 'active' : '' }}
                                        {{ Route::current()->getName() == 'admin.users.create' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{route('admin.users.index')}}"
                class="nav-link {{ Route::current()->getName() == 'admin.users.index' ? 'active' : '' }}">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.users.create')}}"
                class="nav-link
                {{ Route::current()->getName() == 'admin.users.create' ? 'active' : '' }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>Crear un usuario</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link {{ Route::current()->getName() == 'admin.users.index' ? 'active' : '' }}
                                        {{ Route::current()->getName() == 'admin.users.create' ? 'active' : '' }}">
              <i class="nav-icon fa fa-copy"></i>
              <p>
                Requisitos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">  {{-- active --}}
                <a {{ Request::is('admin3/posts') ? '' : '' }} href="{{route('admin.posts.index')}}" {{-- active --}}
                class="nav-link {{ Route::current()->getName() == 'admin.posts.index' ? '' : '' }}">{{-- active --}}
                  <i class="far fa-bookmark nav-icon"></i>
                  <p>Crear Req Indispensables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.posts.create')}}" class="nav-link {{ Route::current()->getName() == 'admin.posts.create' ? '' : '' }}">{{-- active --}}
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Crear Req Generales</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link "> {{-- active --}}
              <i class="nav-icon fa fa-copy"></i>
              <p>
                 Calificación de Méritos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{-- active --}}">
                <a {{ Request::is('admin3/posts') ? '' : '' }} href="{{route('admin.posts.index')}}"
                class="nav-link {{ Route::current()->getName() == 'admin.posts.index' ? '' : '' }}">{{-- active --}}
                  <i class="far fa-bookmark nav-icon"></i>
                  <p>Crear TCM</p>
                </a>
              </li>
            </ul>
        </li>
       </ul>
     </nav>