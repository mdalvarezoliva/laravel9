<x-layouts.app title="Blog" metadescription="Descripcion de la Pagina Blog">
    <div class="card-header d-flex justify-content-start">
        <h2><i class="bi bi-card-list"></i>&nbsp;&nbsp;Administrador de Posts!</h2>
        @auth
            <a class="btn btn-primary ms-5 px-4" href="{{ route('posts.create') }}"><i class="bi bi-clipboard-plus-fill"></i>&nbsp;&nbsp;Nuevo Post!</a>
        @endauth
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 10%;" scope="col">&nbsp;#</th>
                <th style="width: 65%;" scope="col">&nbsp;Titulo</th>
                <th style="width: 25%;" class=" text-end me-3" scope="col">Acciones&nbsp;&nbsp;</th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tbody>
                <tr>
                    <th scope="row">&nbsp;{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        <div class="container d-flex justify-content-end">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary mx-1 px-2"><i class="bi bi-search"></i></a>
                            @auth
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary mx-1 px-2"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button class="btn btn-danger mx-1 px-2" type="submit"><i class="bi bi-trash3"></i></button>
                                </form>
                            @endauth
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</x-layouts.app>
