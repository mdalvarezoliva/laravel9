<x-layouts.app title="{{ $posts->title }}" metadescription="Descripcion de la Pagina {{ $posts->title }}">

    <div class="card-header d-flex justify-content-start">
        <a class="btn btn-primary me-3 px-3" href="{{ route('posts.index') }}"><i class="bi bi-folder-symlink-fill"></i>&nbsp;&nbsp;Volver</a>
        <h2><i class="bi bi-card-list"></i>&nbsp;&nbsp;Contenido del Post!</h2>
    </div>

    <div class="card-body">
        <h5 class="card-title">{{ $posts->title }}</h5>
        <p class="card-text">{{ $posts->body }}</p>
    </div>

</x-layouts.app>



