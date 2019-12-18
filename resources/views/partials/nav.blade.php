<nav class="navbar navbar-default navbar-expand-ml bg-white shadow-sm">
   <div class="container">
   			<a class="navbar-left espacio izquierda" href=""><img height="50px" src="/assets/img/burgos-pro.png" alt=""></a>
			<a class="navbar-brand espacio" href="{{ route('home')}}">
					{{config( 'app.name' )}}
			</a>
			 <button class="navbar-toggle navbar-light"
			 type="button"
			 data-toggle="collapse"
			 data-target="#app-navbar-collapse">
	                        <span class="sr-only">Toggle Navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	        </button>

	    <div class="collapse navbar-collapse" id="app-navbar-collapse">
	  		<ul class="nav nav-pills navbar-right espacio">
	  			<li class="nav-item espacio"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
				<i class="fa fa-home fa-lg"></i>
	  			Inicio</a></li>

				<li class="nav-item espacio"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }} ">
				<i class="fa fa-users"></i>
				Acerca de nosotros</a></li>

				<li class="nav-item espacio"><a class="nav-link {{ setActive('projects.index') }}" href="{{ route('projects.index') }} ">Requisitos</a></li>

				<li class="nav-item espacio"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }} ">
				<i class="fa fa-envelope-open"></i>
				Contáctame</a></li>

				@auth
				<li class="nav-item espacio">

					<a href="{{ route('users.index') }}">Usuarios</a></li>
					<li class="nav-item espacio"><a class="nav-link" href="#" onclick="event.preventDefault();
	                     document.getElementById('logout-form').submit();"
	                     >Cerrar sesión</a>
						<li>
							<a href="#" class="espacio">
								<img height="33px" src="{{Auth::user()->avatar}}">
								{{ auth()->user()->name }}</a></li>
	              </li>
	              @if(session()->has('impersonator_id'))
				<form  method="POST" action=" {{route('impersonations.destroy')}} "
					class="navbar-form pull-right">
					{{ csrf_field() }} {{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Despersonificar</button>
				</form>
				@endif

				@else
				<li class="nav-item espacio"><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a></li>
				<li class="nav-item espacio"><a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">Registrar</a></li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   		 {{ csrf_field() }}
</form>