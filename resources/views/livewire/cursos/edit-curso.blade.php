<div>
    <form wire:submit.prevent="editarCurso">
        <div class="row">

            <div wire:loading wire:target="foto" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>

            <div class="col-4">

                @if ($foto != null)
                    <img style="width: 230px; height: 230px;" src="{{$foto->temporaryUrl()}}" alt="">
                @else
                    <img style="width: 230px; height: 230px;"
                    src="{{Storage::disk('public')->url($curso->foto != null ? $curso->foto : 'images/img_cursos/default.png')}}"
                    alt="">
                @endif

                <form>
                    <div class="form-group">
                      <label>Subir Imagen</label>
                      <input wire:model="foto" type="file" class="form-control-file">
                      @error('foto') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </form>
            </div>

        <div class="mx-auto col-6">
            <div class="form-group">
              <label>Curso</label>
              <input wire:model="curso.curso" type="text" class="form-control">
              @error('curso.curso') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <input wire:model="curso.categoria" type="text" class="form-control">
                @error('curso.categoria') <span class="text-danger">{{ $message }}</span>@enderror
              </div>

            <div class="form-group">
              <label>Precio</label>
              <input wire:model="curso.precio" type="text" class="form-control">
              @error('curso.precio') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label>Subtitulos</label>
                <input wire:model="curso.subtitulos" type="text" class="form-control">
                @error('curso.subtitulos') <span class="text-danger">{{ $message }}</span>@enderror
              </div>

            <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Guardar</button>
            <a href="{{route('cursos')}}" class="btn btn-secondary btn-sm">Regresar</a>
        </div>
    </div>
</form>
</div>
