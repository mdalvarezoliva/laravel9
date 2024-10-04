<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $metadescription ?? 'Descripción Default' }}">
        <title>Blog - {{ $title ?? 'Default Home Page' }}</title>
        <!-- Favicons -->
        <link href="/img/icono.png" rel="icon" type="image/x-icon" />
        <link href="/img/icono.png" rel="apple-touch-icon" type="image/x-icon" />

        {{-- Styles CSS --}}
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body class="">
        <div style="height: 15vh;"></div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <img class="m-2" src="img/icono.png" alt="" width="72">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login.store') }}" method="POST">
                            @csrf
                            <h1 class="h3 mb-3 fw-normal">Por favor ingrese a su cuenta.</h1>

                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Dirección de Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="row m-3">
                                <div class="col checkbox ">
                                    <input type="checkbox" value="ok" name="remember"> Recordarme
                                </div>
                                <div class="col">
                                    <a class="" href="{{ route('create_login')}}">Registrarse</a>
                                </div>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-0 mb-4" type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

