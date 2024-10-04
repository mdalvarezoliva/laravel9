<x-layouts.app title="Alta de Posts" metadescription="Descripcion de la Pagina Alta de Posts">

        <div class="card-header">
            <h2><i class="bi bi-clipboard-plus-fill"></i>&nbsp;Agregar Nuevos Post!</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                @include('posts.form')
                <div class="container text-center botones">
                    <button type="submit" class="btn btn-success p-2 m-2"><i class="bi bi-check-circle"></i>&nbsp;Guardar&nbsp;&nbsp;</button>
                    <form action="" method="POST">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary p-2 m-2"><i class="bi bi-x-circle"></i>&nbsp;&nbsp;Cancelar&nbsp;&nbsp;</a>
                    </form>
                </div>
            </form>
        </div>

</x-layouts.app>