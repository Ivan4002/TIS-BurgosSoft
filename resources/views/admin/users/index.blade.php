@extends('admin.layout')

@section('header')

<div class="col-sm-6">
		<h1 class="m-0	 text-dark">Listado de Usuarios</h1>
	</div><!-- /.col -->
	<div class="col-sm-6">
	 <ol class="breadcrumb float-sm-right">
		<li class="breadcrumb-item"><a href="#">Inicio</a></li>
		<li class="breadcrumb-item active">Usuarios</li>
	 </ol>
	</div><!-- /.col -->
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">listado de usuarios</h3>
            <a href="{{route('admin.users.create')}}" class="btn btn-primary "style="float:right;">
              <i class="fa fa-plus"></i> Crear usuario</a>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
             <table id="user-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Roles</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>
             <tbody>
        				@foreach($users as $user)
        				<tr>
        					<td>{{$user->id}}</td>
        					<td>{{$user->name}}</td>
        					<td>{{$user->email}}</td>
                  <td>
                        {{ $user->roles->pluck('display_name')->implode(', ')}}
                  </td>
        					<td>
        						<a href="{{ route('admin.users.show', $user) }}"
                        class="btn btn-xs btn-default"
                        ><i class="fa fa-eye"></i></a>

                    <a href="{{ route('admin.users.edit', $user) }}"
                    class="btn btn-xs btn-info"
                    ><i class="fa fa-edit"></i></a>
                    <form method="POST"
                    action="{{-- {{ route('admin.users.destroy', $user) }} --}}"
                    style="display: inline">
                    {{ csrf_field() }} {{ method_field('DELETE') }}
                    <button class="btn btn-xs btn-danger"
                    onclick="return confim('¿Estás seguro de querer eliminar este usuario?')"
                    ><i class="fa fa-times"></i></button>
                    </form>
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
    $('#user-table').DataTable({
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
  <form method="POST" action="#">
  {{ csrf_field() }}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">En construcción</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          {{-- <label>Título de la usuario</label> --}}
          <input name="title"
          class="form-control"
          value="{{ old('title') }}"
          placeholder="Ingresa aquí el título de la usuario">
          {!!$errors->first('title','<span class="help-block text-danger">:message</span>')!!}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        <button  class="btn btn-primary">Crear usuario</button>
      </div>
    </div>
  </div>
</form>
</div>
@endpush
