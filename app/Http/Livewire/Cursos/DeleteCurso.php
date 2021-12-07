<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteCurso extends Component
{
    use WithFileUploads;
    public Curso $curso;
    public $foto;

    public function render()
    {
        return view('livewire.cursos.delete-curso');
    }

    public function eliminarCurso(){
        $this->curso->delete();
        Storage::disk('public')->delete($this->curso->foto);
        return redirect(route('cursos'));
    }
}
