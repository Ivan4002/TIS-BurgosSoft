@extends('layout')

@section('title','Contáctame | Burgossoft')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-offset-3 m-auto">

	@if ($errors->any())
	   <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form class="bg-white shadow rounded py-3" method="POST" action="{{route('messages.store')}}">
		{{csrf_field()}}
		<h1 class="display-4">Contáctame</h1>
		<div class="form-group">
			<label for="name">Nombre:</label>
		    <input class="form-control bg-light shadow-sm is-invalid border-0"
		       id="name"
		       name="name"
			   placeholder="Nombre..."
			   value="{{old('name')}}"><br>
		</div >
		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control bg-light shadow-sm is-invalid border-0"
			type="email"   id="email" name="email" placeholder="Email..." value=""><br>
		</div>
		<div class="form-group">
			<label for="subject">Asunto:</label>
			<input class="form-control bg-light shadow-sm is-invalid border-0"
			id="subject"
			name="subject" placeholder="Asunto..." value=""><br>
		</div>
		<div class="form-group">
			<label for="email">Mensaje:</label>
			<textarea class="form-control bg-light shadow-sm is-invalid border-0"
			name="content" placeholder="Mensaje..."></textarea><br>
		</div>
		<button class="btn btn-primary btn-lg btn-block">Enviar</button>
	</form>

			</div>
		</div>

</div>
@endsection