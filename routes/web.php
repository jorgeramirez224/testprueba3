<?php

use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use Illuminate\Support\Facades\Route;

Route::get('/usuarios', IndexUsuarios::class)->name('usuarios');
Route::get('/usuarios/crear', CreateUsuario::class)->name('usuarios.crear');
Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name('usuarios.edit');
Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name('usuarios.delete');
