<div>
    <div class="card mx-auto" style="width: 18rem;">
        @if ($foto != null)
            <img style="width: 286px; height: 286px;" class="mx-auto card-img-top"
                    src="{{Storage::disk('public')->url($usuario->foto)}}" alt="Card image cap">
        @else
                <img style="width: 286px; height: 286px;"
                src="{{Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/img_usuarios/default.png')}}"
                alt="">
        @endif

        <div class="card-body">
          <h5 class="card-title">{{$usuario->nombre_usuario}}</h5>
          <p class="card-title">{{$usuario->email}}</p>
          <button wire:click="eliminarUsuario" class="btn btn-danger btn-sm">Confirmar</button>
          <a href="{{route('usuarios')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
</div>
