<div wire:init="cargando">

    <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                aria-label="Username" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
            <a href="{{route('usuarios.crear')}}" type="button"
                class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle"></i>Nuevo Registro</a>
        </div>
        </div>
    </div>

    @if (count($usuarios) > 0)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->nombre_usuario}}</td>
                    <th>
                        <img style="width:50px; height:50px;"
                        src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/img_usuarios/default.png')}}"
                        alt="">
                    </th>
                    <td>{{$usuario->email}}</td>
                    <td>
                        <a href="{{route('usuarios.show', $usuario)}}" title="Mostrar más"
                        class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                        <a href="{{route('usuarios.edit', $usuario)}}" title="Editar/Modificar"
                        class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                        <a href="{{route('usuarios.delete', $usuario)}}" title="Eliminar curso seleccionado"
                        class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    @else
    <img class="mx-auto d-block" style="width:500px;height:500px;" src="{{Storage::disk('public')->url('images/otros/spinning-loading.gif')}}" alt="">
    @endif

      {{$cargado==True ? $usuarios->links(): null}}
</div>
