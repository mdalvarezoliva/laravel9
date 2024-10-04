<x-layouts.app title="Alta de Posts" metadescription="Descripcion de la Pagina Registro de Usuarios">

    <div class="card-header">
        <h2><i class="bi bi-person-add"></i>&nbsp;Registrar Usuarios!!</h2>
    </div>
    <div class="card-body">
        <form action="#" method="POST">{{-- {{ route('login.store') }} --}}
            @csrf
            @include('login.form')
            <div class="container text-center botones">
                <button type="submit" class="btn btn-success p-2 m-2"><i class="bi bi-check-circle"></i>&nbsp;Registrar&nbsp;&nbsp;</button>
                <form action="" method="POST">
                    <a href="{{ route('home') }}" class="btn btn-primary p-2 m-2"><i class="bi bi-x-circle"></i>&nbsp;&nbsp;Cancelar&nbsp;&nbsp;</a>
                </form>
            </div>
        </form>
    </div>

</x-layouts.app>