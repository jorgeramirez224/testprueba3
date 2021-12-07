<div>
    <div class="card mx-auto" style="width: 18rem;">
        @if ($foto != null)
            <img style="width: 286px; height: 286px;" class="mx-auto card-img-top"
                    src="{{Storage::disk('public')->url($curso->foto)}}" alt="Card image cap">
        @else
                <img style="width: 286px; height: 286px;"
                src="{{Storage::disk('public')->url($curso->foto != null ? $curso->foto : 'images/img_cursos/default.png')}}"
                alt="">
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">{{$curso->curso}}</h5>
            <p class="card-title text-center">{{$curso->categoria}}</p>
            <p class="card-title text-center">{{$curso->subtitulos}}</p>
            <button wire:click="eliminarCurso" class="btn btn-danger btn-sm">Confirmar</button>
            <a href="{{route('cursos')}}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
</div>
