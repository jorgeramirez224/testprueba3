<div wire:init = "cargando">

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
                <a href="{{route('ventas.crear')}}" type="button"
                    class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle">
                        </i>Nuevo Registro de venta</a>
            </div>
            </div>
        </div>

        @if (count($ventas) > 0)
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th>Nombre de usuario</th>
                <th scope="col">Curso adquirido</th>
                <th scope="col">Fecha de compra</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{$venta->id}}</th>
                        <td><span class="badge badge-primary">{{$venta->nombre_usuario}}</span></td>
                        <td><span class="badge badge-success">{{$venta->curso}}</span></td>
                        <td><span class="badge badge-warning">{{$venta->created_at}}</span></td>
                        <td>
                            <a href="#" title="Mostrar más"
                            class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                            <a href="#" title="Editar/Modificar"
                            class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                            <a href="#" title="Eliminar curso seleccionado"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

        @else
        <img class="mx-auto d-block" style="width:500px;height:500px;" src="{{Storage::disk('public')->url('images/otros/spinning-loading.gif')}}" alt="">
        @endif

            {{$cargado == True ? $ventas->links(): null}}
</div>
