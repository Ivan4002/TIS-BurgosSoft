@extends('layout')

@section('title','portafolio | ' . $project->title)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
			<h1 class="display-4">{{ $project->title }}</h1>
				<p class="text-secondary">
					{{$project->description}}</p>
				<p class="text-secondary">{{$project->created_at->diffForHumans()}}</p>
				<div class="d-flex justify-content-between lign-item-center">
				<a href="{{route('projects.index')}}">Regresar</a>
				@auth
				<div class="btn-group btn-group-sm">
				 <a class="btn btn-success" href="{{route('projects.edit', $project) }}">Editar</a>
				 	<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
				</div>
				<form id="delete-project" class="d-none" method="POST" action="{{route('projects.destroy', $project) }}">
					<input type="hidden" name="_method" value="delete">
					{{csrf_field()}}
				</form>
			@endauth
			</div>
		</div>
   </div>
@endsection