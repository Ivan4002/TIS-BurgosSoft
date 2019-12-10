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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Convocatoria
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a {{ Request::is('admin3/posts') ? 'active' : '' }} href="{{route('admin.posts.index')}}"
                class="nav-link {{ Route::current()->getName() == 'admin.posts.index' ? 'active' : '' }}">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver Convocatoria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.posts.create')}}" class="nav-link {{ Route::current()->getName() == 'admin.posts.create' ? 'active' : '' }}">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Crear una Convocatoria</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>