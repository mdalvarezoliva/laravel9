<x-layouts.app title="Alta de Posts" metadescription="Descripcion de la Pagina Alta de Posts">

    <div class="card-header">
        <h2><i class="bi bi-clipboard-plus-fill"></i>&nbsp;Formulario para Pruebas</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST" id="formulario">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label @if ($errors->has('title')) text-danger @endif">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" value="">
                @error('title')
                    <div class="form-text text-danger help">{{ $message }}&nbsp;<i class="bi bi-exclamation-diamond-fill"></i></div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="body" class="form-label @if ($errors->has('body')) text-danger @endif">Contenido</label>
                <textarea class="form-control" name="body" id="body" rows="4"></textarea><br>
                @error('body')
                    <div class="form-text text-danger help">{{ $message }}&nbsp;<i class="bi bi-exclamation-diamond-fill"></i></div>
                @enderror
            </div>


            <div class="container text-center botones">
                <button type="submit" id="btnGuardar" class="btn btn-success p-2 m-2"><i class="bi bi-check-circle"></i>&nbsp;Guardar&nbsp;&nbsp;</button>
                <form action="" method="POST">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary p-2 m-2"><i class="bi bi-x-circle"></i>&nbsp;&nbsp;Cancelar&nbsp;&nbsp;</a>
                </form>
            </div>
        </form>
    </div>

<div id="myModal" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
        ...
        </div>
            <div class="modal-footer">
                <button id="btnAceptar" type="button" class="btn btn-primary">Aceptar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

    <script src="/js/pruebas.js"></script>
</x-layouts.app>