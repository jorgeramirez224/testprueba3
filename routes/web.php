<?php

use App\Http\Livewire\Cursos\CreateCurso;
use App\Http\Livewire\Cursos\DeleteCurso;
use App\Http\Livewire\Cursos\EditCurso;
use App\Http\Livewire\Cursos\IndexCursos;
use App\Http\Livewire\Cursos\ShowCurso;
use App\Http\Livewire\Instrumentos\CreateInstrumento;
use App\Http\Livewire\Instrumentos\DeleteInstrumento;
use App\Http\Livewire\Instrumentos\EditInstrumento;
use App\Http\Livewire\Instrumentos\IndexInstrumento;
use App\Http\Livewire\Instrumentos\ShowInstrumento;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/cursos', IndexCursos::class)->name('cursos');
    Route::get('/cursos/crear', CreateCurso::class)->name('cursos.crear');
    Route::get('/cursos/{curso}/show', ShowCurso::class)->name('cursos.show');
    Route::get('/cursos/{curso}/edit', EditCurso::class)->name('cursos.edit');
    Route::get('/cursos/{curso}/delete', DeleteCurso::class)->name('cursos.delete');

    Route::get('/instrumentos', IndexInstrumento::class)->name('instrumentos');
    Route::get('/instrumentos/crear', CreateInstrumento::class)->name('instrumentos.crear');
    Route::get('/instrumentos/{instrumento}/show', ShowInstrumento::class)->name('instrumentos.show');
    Route::get('/instrumentos/{instrumento}/edit', EditInstrumento::class)->name('instrumentos.edit');
    Route::get('/instrumentos/{instrumento}/delete', DeleteInstrumento::class)->name('instrumentos.delete');

    Route::get('/usuarios', IndexUsuarios::class)->name('usuarios');
    Route::get('/usuarios/crear', CreateUsuario::class)->name('usuarios.crear');
    Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name('usuarios.show');
    Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name('usuarios.edit');
    Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name('usuarios.delete');

    Route::get('/ventas', VentasIndex::class)->name('ventas');
    Route::get('/ventas/crear', VentasCreate::class)->name('ventas.crear');

});

