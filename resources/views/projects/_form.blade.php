{{csrf_field()}}

       <div class="form-grup">
       	<label for="title">Diploma académico:</label>
		<input class="form-control border-0 bg-light shadow-sm" type="text" name="title" value="{{ old('title', $project->title) }}">
		<input name="image" type="file" class="custom-file-input" id="customFile"><br>

	</div>
	<div class="form-grup">
       	<label for="title">Título en previsión Nacional:</label>
		<input class="form-control border-0 bg-light shadow-sm" type="text" name="prevition" value="{{ old('prevition', $project->prevition) }}">
		<input name="image2" type="file" class="custom-file-input" id="customFile"><br>

	</div>

	<div class="form-grup">
			<label for="url">Certificado:</label>
		<input class="form-control border-0 bg-light shadow-sm" type="text" name="url" value="{{ old('url', $project->url) }}">
	</div>

	<div class="form-grup">
		<label>Título de diplomado:</label>
		<textarea class="form-control border-0 bg-light shadow-sm" name="description">{{ old('description' , $project->description) }}</textarea>
	</div><br>
	<button class="btn btn-success btn-lg btn-block">{{ $btnText}}</button>
	<a class="btn btn-link btn-block" href="{{route('projects.index')}}">Cancelar</a>