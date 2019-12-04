@extends('admin.layout')

@section('header')
        <h1>
        Todos los concursos
        <small> concursos</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">concursos</li>
      </ol>
@stop
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de concursos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Facultad</th>
                  <th>Culmina</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                    <td>  {{ $post->id }}  </td>
                    <td> {{ $post->titulo }} </td>
                    <td> {{ $post->descripcion }} </td>
                    <td> {{ $post->facultad->nombre_facultad }} </td>
                    <td> {{$post->fecha_creacion->format('M d')}} </td>

                    <td> 
                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop
@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css"> 
@endpush

@push('scripts')

    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script> 
    <script>
     $(function () {
   
        $('#posts-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
        });
    });
    </script>
 @endpush

>