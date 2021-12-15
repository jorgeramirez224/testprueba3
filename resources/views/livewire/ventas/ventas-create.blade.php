<div>
    <form wire:submit.prevent="crearVenta">
        <div class="row">

            <div class="mx-auto col-6">
                <div class="mb-3">
                    <label class="form-label">Usuario que adquiere el curso</label>
                    <select wire:model="venta.id_usuario" class="form-control">
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Curso</label>
                    <select wire:model="venta.id_curso" class="form-control">
                        @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->curso}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('ventas')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
