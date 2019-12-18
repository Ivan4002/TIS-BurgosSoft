@extends('admin.layout')

@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{Auth::user()->avatar}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$user->roles->pluck('display_name')->implode(', ')}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$user->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Redes sociales</b> <a class="float-right">{{$user->profiles->pluck('social_network')->implode(', ')}}</a>
                  </li>

                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
              </div>
              <!-- /.card-body -->
            </div></div>
		<div class="col-md-3">
		   	<div class="card card-primary card-outline">
              <div class="card-header">
              	<h5 class="box-title">Permisos extra</h5>
              </div>
          </div>
		</div>
	</div>
@endsection