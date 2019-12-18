@extends('admin.layout')
@section('header')

	<div class="col-sm-6">
		<h1 class="m-0	 text-dark">Crear convocatoria</h1>
	</div><!-- /.col -->
	<div class="col-sm-6">
	 <ol class="breadcrumb float-sm-right">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-tachometer-alt"></i>Inicio</a></li>
	 </ol>
	</div><!-- /.col -->
@stop
@section('content')
	<h1>Dashboad</h1>
	<div class="row">
		<div class="container">
			<div class="col-sm-6">
                 	<form id="myAwesomeDropzone" action="/upload-target" class="dropzone"></form>
			</div>
		</div>
	</div>



@stop
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css">
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script>
	 	Dropzone.options.myAwesomeDropzone = {
 	 accept: function(file, done) {
   	 var thumbnail = $('.dropzone .dz-preview.dz-file-preview .dz-image:last');

    	switch (file.type) {
    	  case 'application/pdf':
     	   thumbnail.css('background', 'url(/img/pdf1.png');
      	  break;
   	      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
    	    thumbnail.css('background', 'url(/img/pdf1.png');
       	  break;
    }

    done();
  },
};
	new Dropzone('.dropzone',{
		url: '/',
		dictDefaultMessage: 'Arrastra los documentos aquí para subirlos'
	});
	Dropzone.autoDiscover = false;


</script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
@endpush