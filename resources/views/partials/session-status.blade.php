
@if(session('status'))
<div class="container">
	<div class="alert alert-success alert-dismissible" role="alert">
	 	{{session('status')}}
		<button type="button"
				class="close"
				data-dismiss="alert"
				aria-label="Close">
				<span aria-hidden="true">&times;</span>
		</button>
		</div>
</div>
@endif