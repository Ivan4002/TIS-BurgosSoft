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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">listado de publicaciones</h3>
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
@endpush
