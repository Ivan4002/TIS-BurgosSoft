
@foreach($posts as  $post)
<section class ="posts container">
    <article class="post no-image">
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class= " c-gris">{{$post->fecha_creacion->format('M d')}}</span>

                </div>
                <div class="post-category">
                    <span class="category">{{$post->facultad->nombre_facultad}}</span>
                </div>
            </header>
            <h1>{{ $post->titulo}}</h1>
            <div class="divider"></div>
            <p>{{$post->descripcion}}</p>
            <footer class="container-flex space-between">
                <div class="red-more">
                    <a href="" class="text-uppercase c-green"> read more</a>
                </div>
                <div class="tags container-flex">
                    <span class="tag c-gris">#yosemitse</span>
                    <span class="tag c-gris">#peak </span>
                    <span class="tag c-gris">#explorer </span>
                </div>
            </footer>

        </div>
    </article>
</section>
@endforeach