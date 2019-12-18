@extends('admin.layout')
@section('content')
	<div class="row">
			<div class="col-md-5">
		<div class="card card-primary card-outline">
			<div class="card-header with-border">
				<h5 class="">Datos personales</h5>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.store')}}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input name="name" value="{{ old('name') }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" value="{{ old('email') }}" class="form-control">
					</div>
					@include('admin.roles.checkboxes')
					<span class="help-block">La contraseña sera generada y enviada al nuevo usuario vía email</span>
					<button class="btn btn-primary btn-block">Crear usuario</button>

				</form>
			</div>
		</div>
	</div>

	</div>
@endsection