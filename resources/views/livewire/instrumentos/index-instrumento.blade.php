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
            <a href="{{route('instrumentos.crear')}}" type="button"
                class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle"></i>Nuevo Registro</a>
        </div>
        </div>
    </div>

    @if (count($instrumentos) > 0)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Instrumento</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Marca</th>
            <th scope="col">Proveedor</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($instrumentos as $instrumento)
                <tr>
                    <th scope="row">{{$instrumento->id}}</th>
                    <td>{{$instrumento->nombre_instrumento}}</td>
                    <th>
                        <img style="width:50px; height:50px;"
                        src="{{Storage::disk('public')->url($instrumento->foto!=null ? $instrumento->foto : 'images/img_instrumentos/default.png')}}"
                        alt="">
                    </th>
                    <td>{{$instrumento->precio}}</td>
                    <td>{{$instrumento->marca}}</td>
                    <td>{{$instrumento->proveedor}}</td>
                    <td>
                        <a href="{{route('instrumentos.show', $instrumento)}}" title="Mostrar más"
                        class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                        <a href="{{route('instrumentos.edit', $instrumento)}}" title="Editar/Modificar"
                        class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                        <a href="{{route('instrumentos.delete', $instrumento)}}" title="Eliminar curso seleccionado"
                        class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    @else
    <img class="mx-auto d-block" style="width:500px;height:500px;" src="{{Storage::disk('public')->url('images/otros/spinning-loading.gif')}}" alt="">
    @endif

      {{$cargado==True ? $instrumentos->links(): null}}
</div>
