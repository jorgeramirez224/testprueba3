<div>
    <form wire:submit.prevent="editarUsuario">
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
                    src="{{Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/img_usuarios/default.png')}}"
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

            <div class="col-6 mx-auto">
                <div class="form-group">
                    <label>Nombre de Usuario</label>
                    <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
                    @error('usuario.nombre_usuario') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input wire:model.defer="usuario.email" type="email" class="form-control">
                    @error('usuario.email') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input wire:model.defer="usuario.password" type="password" class="form-control">
                    @error('usuario.password') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <button wire:loading.attr="disabled" wire:target="foto" type="submit" class="btn btn-success">Modificar</button>
                <a href="{{route('usuarios')}}" type="submit" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
