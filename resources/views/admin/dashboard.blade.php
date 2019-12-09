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
	<p>Usuario autenticado: {{auth()->user()->name}}</p>
@stop