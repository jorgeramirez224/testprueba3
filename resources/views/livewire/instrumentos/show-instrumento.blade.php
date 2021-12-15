<div>
    <div class="card mx-auto" style="width: 18rem;">
        @if ($foto != null)
            <img style="width: 286px; height: 286px;" class="mx-auto card-img-top"
                    src="{{Storage::disk('public')->url($instrumento->foto)}}" alt="Card image cap">
        @else
                <img style="width: 286px; height: 286px;"
                src="{{Storage::disk('public')->url($instrumento->foto != null ? $instrumento->foto : 'images/img_instrumentos/default.png')}}"
                alt="">
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">{{$instrumento->nombre_instrumento}}</h5>
            <p class="card-title text-center">{{$instrumento->marca}}</p>
            <a href="{{route('instrumentos')}}" class="btn btn-secondary d-block">Regresar</a>
        </div>
    </div>
</div>
