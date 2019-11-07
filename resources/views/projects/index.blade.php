@extends('layout')
@section('title','portfolio')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-3 ">
		<h1 class="display-4">Requisitos Indespensables</h1>

		@auth
			<a class="btn btn-primary" href="{{route('projects.create')}}">Añadir Requisitos</a>
		@endauth

		</div><br>
				<p class="lead text-primary">
			proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse

		</p>
		<ul class="list-group">
			  @forelse($projects as $project)
			 		<li class="list-group-item border-0 mb-3 shadow-sm">
			 			<a class="text-secondary d-flex justify-content-between"
			 				 href="{{route('projects.show',$project)}}">
			 				 <span class=" font-weight-bold">
			 					{{ $project->title}}
		 					</span>
		 					<span class="text-black-100 derecha">
			 				 	{{ $project->created_at->diffForHumans()}}
			 				</span>
			 			</a></li>
					<!--<pre>{{ var_dump($loop)}}</pre></li>-->
			   @empty
		   		<li class="list-group-item border-0 mb-3 shadow-sm">
		   				 No hay proyectos para mostrar</li>
			@endforelse
			{{$projects->links()}}
		</ul>
	</div>
@endsection