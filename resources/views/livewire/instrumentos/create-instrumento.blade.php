<div>
    <form wire:submit.prevent="crearInstrumento">
        <div class="row">

            <div wire:loading wire:target="foto" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>

            <div class="col-4">
                <img style="width: 230px; height: 230px;"
                src="{{$foto!=null ? $foto->temporaryUrl() : Storage::disk('public')->url('images/img_instrumentos/default.png')}}" alt="">
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
                  <label>Nombre de instrumento</label>
                  <input wire:model="instrumento.nombre_instrumento" type="text" class="form-control">
                  @error('instrumento.nombre_instrumento') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Precio</label>
                    <input wire:model="instrumento.precio" type="text" class="form-control">
                    @error('instrumento.precio') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>


                <div class="form-group">
                    <label>Marca</label>
                    <input wire:model="instrumento.marca" type="text" class="form-control">
                    @error('instrumento.marca') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Proveedor</label>
                    <input wire:model="instrumento.proveedor" type="text" class="form-control">
                    @error('instrumento.proveedor') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('instrumentos')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>

