@extends('layout')
@section('title','burgosSoft')
@section('content')
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="/assets/css/normalize.css">
		<link rel="stylesheet" href="/assets/css/framework.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/responsive.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
    {{-- empieza la visata completa de la convocatoria --}}
<div class="posts container">
    <div class="row">
            <div class="col-4 col-lg-6">
             <article class="post no-imga">
              <div class="content-post">
                <header class="container-flex space-between">
                  <div class="date">
                    <span class="c-gris-1">{{ $post->published_at->format('M d') }}</span>
                  </div>
                  <div class="post-category">
                    <span class="category">{{ $post->category->name }}</span>
                  </div>
                </header>
                <h1>{{ $post->title }}</h1>
                {{-- <div class="divider"></div> --}}
                <div class="image-w-text">
                  {!! $post->body !!}
                </div>

                <footer class="container-flex space-between">
                  <div class="tags container-flex">
                    @foreach ($post->tags as $tag)
                      <span class="tag c-gray-1 text-capitalize">#{{ $tag->name }}</span>
                    @endforeach
                  </div>
                </footer>
              </div>
            	</article>
             </div>
              <div class="col-4 col-lg-6">
             <article class="post no-imga">
              <div class="content-post">
                <header class="container-flex space-between">
                  <div class="date">
                    <span class="c-gris-1">{{ $post->published_at->format('M d') }}</span>
                  </div>
                  <div class="post-category">
                    <span class="category">{{ $post->category->name }}</span>
                  </div>
                </header>
                <h1>{{ $post->title }}</h1>
                {{-- <div class="divider"></div> --}}
                <div class="image-w-text">
                  {!! $post->body !!}
                </div>

                <footer class="container-flex space-between">
                  <div class="tags container-flex">
                    @foreach ($post->tags as $tag)
                      <span class="tag c-gray-1 text-capitalize">#{{ $tag->name }}</span>
                    @endforeach
                  </div>
                </footer>
              </div>
              </article>
             </div>

        </div>

    </div>
@endsection