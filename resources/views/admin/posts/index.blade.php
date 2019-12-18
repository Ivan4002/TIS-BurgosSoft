@extends('admin.layout')
@section('header')

<div class="col-sm-6">
		<h1 class="m-0	 text-dark">Todas las publicaciones</h1>
	</div><!-- /.col -->
	<div class="col-sm-6">
	 <ol class="breadcrumb float-sm-right">
		<li class="breadcrumb-item"><a href="#">Inicio</a></li>
		<li class="breadcrumb-item active">Posts</li>
	 </ol>
	</div><!-- /.col -->
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">listado de publicaciones</h3>
            <button class="btn btn-primary "style="float:right;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear Convocatoria</button>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
             <table id="post-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Título</th>
                          <th>Extrado</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>
             <tbody>
        				@foreach($posts as $post)
        				<tr>
        					<td>{{$post->id}}</td>
        					<td>{{$post->title}}</td>
        					<td>{{$post->excerpt}}</td>
        					<td>
        						<a href="{{ route('posts.show', $post) }}"
                        class="btn btn-xs btn-default"
                        ><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
        						<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
        					</td>
        				</tr>
        				@endforeach
            </tbody>
         </table>
      </div>
        <!-- /.card-body -->
          </div>
  </div>

@stop
@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@push('scripts')
  <script src="/adminlte/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script>
  $(function () {
    $('#post-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <form method="POST" action="{{route('admin.posts.store')}}">
  {{ csrf_field() }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">En construcción</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          {{-- <label>Título de la convocatoria</label> --}}
          <input name="title"
          class="form-control"
          value="{{ old('title') }}"
          placeholder="Ingresa aquí el título de la convocatoria">
          {!!$errors->first('title','<span class="help-block text-danger">:message</span>')!!}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        <button  class="btn btn-primary">Crear convocatoria</button>
      </div>
    </div>
  </div>
</form>
</div>
@endpush
