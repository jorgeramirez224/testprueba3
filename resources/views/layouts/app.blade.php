<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @if (Auth::check())
                <a class="navbar-brand" href="#">{{Auth::user()->nombre_usuario}}</a>
            @endif
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('usuarios')}}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('cursos')}}">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('instrumentos')}}">Instrumentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('ventas')}}">Ventas</a>
                        </li>

                        <div style="margin-left: 725px;">
                            @livewire('login.logout')
                        </div>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

      <div class="container mt-5">
          {{$slot}}
      </div>

    @livewireScripts

    <script>
        livewire.on('alerta', mensaje=>{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: mensaje,
            })
        });

        livewire.on('alerta-crear-venta', mensaje=>{
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 1500
            })
        });
    </script>
</body>
</html>
