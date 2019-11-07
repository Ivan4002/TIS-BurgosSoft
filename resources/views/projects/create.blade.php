@extends('layout')
@section('title','Crear Proyecto')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-offset-2 m-auto">


				@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				method="POST"
				enctype="multipart/form-data"
				action="{{route('projects.store') }}">
				<h1 class="display-4">Requisitos Indispensables</h1>
				<hr>
				@include('projects._form',['btnText'=> 'Guardar'])
			</form>
		</div>
   </div>

</div>
@endsection