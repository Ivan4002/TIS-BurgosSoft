@extends('admin.layout')
 
@section('header')
        <h1>
        CONCURSOS
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{route('admin.posts.index')}}"><i class="fa fa-list"></i>Concursos</a></li>
        <li class="active">crear concursos</li>
      </ol>
@stop
@section('content')

    <div class="row">
        <form method="POST"  action="{{route('admin.posts.store')}}">
            {{ csrf_field()}}
             <div class="col-md-8">

                <div class="box box-danger">
                         <div class="box-body">
                             <div class="form-group {{ $errors->has('titulo')? 'has-error' : ''}}" >
                                <label > Titulo del Concurso</label>
                                 <input name="titulo" class="form-control"  value="{{ old('titulo')}}" placeholder="ingresa nombre de conbocatoria " >
                                    {!! $errors->first('titulo','<span class="help-block">:message</span>')!!}
                            </div> 
                            <div class="form-group {{ $errors->has('descripcion')? 'has-error' : ''}}" >
                                <label > Descripcion del concurso</label>
                                 <textarea name="descripcion" id="editor" class="form-control" placeholder="ingresa la dscripcion"> {{ old('descripcion')}}</textarea>
                                 {!! $errors->first('descripcion','<span class="help-block">:message</span>')!!}
                            </div> 

                        </div>
                    
             </div>
         </div>

            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-body">
                                <div class="form-group">
                                    <label>fecha de publicacion</label>

                                    <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        <input name="fecha_creacion" type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('facultad')? 'has-error' : ''}}">
                                        <label>Facultad</label>
                                        <select name="facultad" class="form-control">
                                            <option value="">selecciona una facultad</option>
                                            @foreach($facultad as $facultad)
                                                <option value="{{ $facultad->id}} ">{{ $facultad->nombre_facultad}}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('facultad','<span class="help-block">:message</span>')!!}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">agregar requisitos generales </button>
                                </div>
                     </div>

                    
                 </div>
             </div>
        </form>
    </div>
@stop

@push('styles')

<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
@endpush

@push('scripts')
    <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script>
       $('#datepicker').datepicker({
      autoclose: true
        });
        CKEDITOR.replace('editor');
    </script>
    
 @endpush