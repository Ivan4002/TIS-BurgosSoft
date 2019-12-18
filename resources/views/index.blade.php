@extends('layout')

@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>acciones</td>
						<td>
							@if (auth()->user()->canImpersonate() && auth()->id() !== $user->id)
								<form method="POST" action="{{ route('impersonations.store') }}">
								{{ csrf_field() }}
								<input type="hidden" name="user_id" value="{{ $user->id }}">
								<button class="btn btn-info btn-xs">Personificar</button>
								</form>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection