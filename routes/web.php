<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\SedeController;
use App\Models\instructor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

////////////////////////////////crud instructores////////////////////////////////////////////////////////////////


Route::get('administar',[InstructorsController::class, 'index'])->name('instructor.index');
Route::get('administar/crear',[InstructorsController::class, 'create'])->name('instructor.create');
Route::post('administar/guardar',[InstructorsController::class, 'store'])->name('guardar_instructor');
Route::post('administar/guardarEdit',[InstructorsController::class, 'store'])->name('guardar_editar');
Route::delete('administar/{nro_doc}/eliminar',[InstructorsController::class, 'destroy'])->name('instructor.destroy');
Route::get('administar/editar',[InstructorsController::class, 'edit'])->name('instructor.edit');

////////////////////////////////crud ambientes////////////////////////////////////////////////////////////////


Route::get('adminAmbiente',[ambienteController::class, 'index'])->name('ambiente.index');
Route::get('adminAmbiente/crear',[ambienteController::class, 'create'])->name('ambiente.create');
Route::post('adminAmbiente/guardar',[ambienteController::class, 'store'])->name('guardar_ambiente');
Route::delete('adminAmbiente/{nro_ambiente}/eliminar',[ambienteController::class, 'destroy'])->name('ambiente.destroy');
Route::get('adminAmbiente/editar',[ambienteController::class, 'edit'])->name('ambiente.edit');


////////////////////////////////crud sede////////////////////////////////////////////////////////////////


Route::get('adminSede',[sedeController::class, 'index'])->name('sede.index');
Route::get('adminSede/crear',[sedeController::class, 'create'])->name('sede.create');
Route::post('adminSede/guardar',[sedeController::class, 'store'])->name('guardar_sede');
Route::delete('adminSede/{nro_ambiente}/eliminar',[sedeController::class, 'destroy'])->name('sede.destroy');
Route::get('adminSede/editar',[sedeController::class, 'edit'])->name('sede.edit');