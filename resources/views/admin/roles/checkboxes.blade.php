	<label>Asignar roles:</label>
	@foreach($roles as $id=>$name)
		<div class="checkbox">
			<label>
				<input name="roles[]" type="checkbox" value="{{ $id}}"
				{{ $user->roles->contains($id) ? 'checked=""' : '' }}>
				{{$name}}
			</label>
 		</div>
	@endforeach