<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanteController;
use App\Livewire\MostrarPaciente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [VacanteController::class, 'index'])->middleware(['auth', 'verified'])->name('vacantes.index');
Route::get('/vacantes/create', [VacanteController::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
//R//oute::get('/mostrarpaciente', [MostrarPaciente::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/buscar-paciente', [VacanteController::class, 'buscarPaciente']);














Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
