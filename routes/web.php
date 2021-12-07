<?php

use App\Http\Livewire\Cursos\CreateCurso;
use App\Http\Livewire\Cursos\DeleteCurso;
use App\Http\Livewire\Cursos\EditCurso;
use App\Http\Livewire\Cursos\IndexCursos;
use App\Http\Livewire\Cursos\ShowCurso;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use Illuminate\Support\Facades\Route;

Route::get('/cursos', IndexCursos::class)->name('cursos');
Route::get('/cursos/crear', CreateCurso::class)->name('cursos.crear');
Route::get('/cursos/{curso}/show', ShowCurso::class)->name('cursos.show');
Route::get('/cursos/{curso}/edit', EditCurso::class)->name('cursos.edit');
Route::get('/cursos/{curso}/delete', DeleteCurso::class)->name('cursos.delete');

Route::get('/usuarios', IndexUsuarios::class)->name('usuarios');
Route::get('/usuarios/crear', CreateUsuario::class)->name('usuarios.crear');
Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name('usuarios.edit');
Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name('usuarios.delete');
