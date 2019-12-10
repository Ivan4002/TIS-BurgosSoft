@extends('admin.layout')
@section('header')

	<div class="col-sm-6">
		<h1 class="m-0	 text-dark">Crear convocatoria</h1>
	</div><!-- /.col -->
	<div class="col-sm-6">
	 <ol class="breadcrumb float-sm-right">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-tachometer-alt"></i>Inicio</a></li>
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-list"></i>Posts</a></li>
		<li class="breadcrumb-item active">Crear</li>
	 </ol>
	</div><!-- /.col -->
@stop
@section('content')
<form method="POST" action="{{route('admin.posts.store')}}">
{{ csrf_field() }}
<div class="row">
	<div class="col-md-8">
		<div class="card card-primary">

			<div class="card-body">
				<div class="form-group">
					<label>Título de la convocatoria</label>
					<input name="title"
					class="form-control"
					value="{{ old('title') }}"
					placeholder="Ingresa aquí el título de la convocatoria">
					{!!$errors->first('title','<span class="help-block text-danger">:message</span>')!!}
				</div>
					<div class="form-group">
						<label>Contenido de la convocatoria</label>
						<textarea rows="10" name="body" id="editor" class="form-control" placeholder="Ingresa el contenido completo de la convocatoria">{{old('body')}}</textarea>
						{!!$errors->first('body','<span class="help-block text-danger">:message</span>')!!}
					</div>
				</div>
		</div>
  	</div>
	<div class="col-md-4">
		<div class="card ">
			<div class="card-body">
				<div class="form-group">
                  <label>Fecha de publicación:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input name="published_at"
                    class="form-control float-right"
					value="{{old('published_at')}}"
                    type="text"
                    id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
				<div class="form-group">
					<label>Categorias</label>
					<select name="category" class="form-control">
						<option value="">Selecciona una categoría</option>
						@foreach($categories as $category)
							<option value="{{ $category->id }}"
									{{ old('category') == $category->id ? 'selected' : ''}}
								> {{ $category->name }} </option>
						@endforeach
					</select>
					{!!$errors->first('category','<span class="help-block text-danger">:message</span>')!!}
				</div>
				<div class="form-group">
					<label>Etiquetas</label>
                  <select name="tags[]" class=" select2"
                  	multiple="multiple"
                  	data-placeholder="Selecciona una o más etiquetas" style="width: 100%;">
					@foreach ($tags as $tag)
						<option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
                  </select>
				</div>
				<div class="form-group">
					<label>Extracto de la convocatoria</label>
					<textarea name="excerpt" class="form-control" placeholder="Ingresa el extracto de la convocatoria">{{ old('excerpt') }}</textarea>
					{!!$errors->first('excerpt','<span class="help-block text-danger">:message</span>')!!}
    			</div>
    			<div class="form-group">
    				<button type="submit" class="btn btn-primary btn-block">Guardar Convocatoria</button>
    			</div>
			</div>
		</div>
	</div>
</div>
</form>
@stop
@push('styles')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@push('scripts')
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

	<script>
		$(function(){
		$("#datepicker").datepicker();
		});
		$('.select2').select2({
			tags: true
		});
		CKEDITOR.replace('editor');
		CKEDITOR.config.height =315;
	</script>
@endpush

