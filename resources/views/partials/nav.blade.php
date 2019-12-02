<nav class="navbar bg-white shadow-sm">
   <div class="container">
			<a class="navbar-brand" href="{{ route('home')}}">
					{{config( 'app.name' )}}
			</a>
			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                        <span class="sr-only">Toggle Navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	        </button>
	    <div class="collapse navbar-collapse" id="app-navbar-collapse">
	  		<ul class="nav-tabs nav pills">
	  			<li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>

				<li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }} ">Acerca de nosotros</a></li>

				<li class="nav-item"><a class="nav-link {{ setActive('projects.index') }}" href="{{ route('projects.index') }} ">Requisitos</a></li>

				<li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }} ">Contáctame</a></li>

				@auth
				<li class="nav-item">

					<a href="{{ route('admin.users.index') }}">Usuarios</a></li>
					<li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
	                     document.getElementById('logout-form').submit();"
	                     >Cerrar sesión</a>
						<li>
							<a href="#">
								<img height="50px" src="{{Auth::user()->avatar}}">
								{{ auth()->user()->name }}</a></li>
	              </li>
	              @if(session()->has('impersonator_id'))
				<form  method="POST" action=" {{route('impersonations.destroy')}} "
					class="navbar-form pull-right">
					{{ csrf_field() }} {{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Dejar de personificar</button>
				</form>
				@endif

				@else
				<li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a></li>
				@endauth
			</ul>
		</div>
	</div>
</nav>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   		 {{ csrf_field() }}
</form>