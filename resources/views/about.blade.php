@extends('layout')
@section('title','Acerca de nosotros | Burgossoft')
@section('content')
	<div class="container">
		<div class="row">

			<div class="col-12 col-lg-6">
				<img class="img-responsive mb-4" src="/img/about2.svg" alt="Quienes somos">
			</div>
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">MISIÓN </h1>
				<p class="lead text-secondary">
					 Somos una institución que brinda a nuestra comunidad  publicaciones
					 y elaboración de convocatorias con las debidas garantías de seguridad que se brinda,
					 para la obtención de un mejor desempeño y a la vez facilitar a nuestra comunidad un
					 mejor servicio.

				</p>
				<h1 class="display-4 text-primary">VISIÓN </h1>
				<p class="lead text-secondary">
					 Somos una institución que garantizará a nuestra comunidad un mejor desarrollo para
					 la obtención de información para las debidas postulaciones,dejando así de lado las
					 duras etapas de recepción manual y brindando así un.mejor servicio con las garantías de
					 seguridad.

				</p>
				<a class="btn btn-lg btn-block btn-success" href="{{ route('contact')}}">Contáctame</a class="btn btn-lg btn-block">
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portafolio</a>
			</div>
		</div>
	</div>

@endsection