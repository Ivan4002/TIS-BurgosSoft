@extends('admin.layout')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card card-primary card-outline">
			<div class="card-header with-border">
				<h5 class="">Datos personales</h5>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.update', $user)}}">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label for="name">Nombre:</label>
						<input name="name" value="{{ old('name', $user->name) }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input name="email" value="{{ old('email', $user->email) }}" class="form-control">
					</div>
					<button class="btn btn-primary btn-block">Actualizar usuario</button>

				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card card-primary card-outline">
			<div class="card-header with-border">
				<h5 class="">Roles y permisos</h5>
			</div>
			<div class="card-body">
				<form method="POST" action="{{route('admin.users.roles.update', $user)}}">
					{{csrf_field()}} {{method_field('PUT')}}
					@include('admin.roles.checkboxes')
					<button class="btn btn-primary btn-block">Actualizar roles</button>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection