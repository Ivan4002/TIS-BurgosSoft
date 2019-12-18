@extends('layout')
@section('title','Burgossoft')
@section('content')
	<div class="posts container">
		<div class="row">
			<div class="col-12 col-lg-6">
{{-- 				<h1 class="display-4 text-primary">Convocatorias</h1>
				<p class="lead text-secondary">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p> --}}

				{{-- <section class="posts container"> --}}
							<meta http-equiv="X-UA-Compatible" content="IE=edge">
							<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
							<title>{{config('app.name')}}</title>
							<link rel="stylesheet" href="{!!asset('/assets/css/style.css')!!}">
							<link rel="stylesheet" href="/assets/css/normalize.css">
							<link rel="stylesheet" href="{!!asset('/assets/css/framework.css')!!}">
							<link rel="stylesheet" href="/assets/css/responsive.css">
							<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
					{{-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}
						@foreach ($posts as $post)
							<article class="post no-imag">
								<div class="content-post">
										<header class="container-flex space-between">
											<div class="date">
												<span class="c-gray-1">{{ $post->published_at->diffForHumans()}}</span>
											</div>
											<div class="post-category">
												<span class="category text-capitalize">{{$post->category->name}}</span>
											</div>
										</header>
										<h1>{{ $post->title }}</h1>
										<div class="divider"></div>
										<p>{{ $post->excerpt }}</p>
										<footer class="container-flex space-between">
											<div class="read-more">
												<a href="convocatoria/{{$post->url}}" class="text-uppercase c-green">Leer más</a>
											</div>
											<div class="tags container-flex">
												@foreach ($post->tags as $tag)
												<span class="tag c-gray-1 text-capitalize">Cod: {{$tag->name}}</span>
												@endforeach
											</div>
										</footer>
									</div>
							</article>
						{{-- </section> --}}
					@endforeach
			</div>

			<div class="col-12 col-lg-6">
				<img class="img-responsive mb-4" src="/img/folder.svg" alt="Desarrollo web"><br>
				<a class="btn btn-lg btn-block btn-success" href="{{ route('contact')}}">Contáctame</a class="btn btn-lg btn-block">
				@auth
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index')}}">Portafolio</a>
				@endauth
			</div>
		</div>
	</div>
@endsection