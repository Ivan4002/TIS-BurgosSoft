@extends('layout')
@section('title','Crear Proyecto')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-offset-2 m-auto">


				@include('partials.validation-errors')

				<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">
					<input type="hidden" name="_method" value="put">
					<h1 class="display-4">
					Editar Proyecto</h1>
					<hr>
					@include('projects._form',['btnText' => 'Actualizar'])
			</form>
			</div>
		</div>
	</div>
@endsection


