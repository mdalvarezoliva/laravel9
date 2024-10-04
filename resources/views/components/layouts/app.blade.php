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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="card m-b-2">
        <x-layouts.navigation/>
    </div>
    <div class="card m-3">
        {{ $slot }}
    </div>

    @if (session('status'))

    
        <div class="toast-container top-0 end-0 p-5" >
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" id="myToast">
                <div class="toast-header" style="background-color: rgb(53, 216, 53); color:rgb(255, 255, 255);">
                    
                    <i class="bi bi-check-circle-fill" style="font-size: 1.5rem;"></i>

                    <strong class="me-auto">&nbsp;&nbsp;&nbsp;&nbsp;Mensaje del Sistema</strong>

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('status') }}
                </div>
            </div>
        </div>
      
        <script>
            setInterval(function () {
                var toastElement = document.getElementById("myToast");
                var toast = 
                    new bootstrap.Toast(toastElement, { autohide: false });
                toast.dispose();
            }, 4500);
        </script>
    @endif
</body>
</html>