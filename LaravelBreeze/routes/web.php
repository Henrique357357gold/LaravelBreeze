<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::get('/cadastro-cliente', [ClienteController::class, 'index'])->middleware(['auth'])->name('cliente.visao-cadastro');
Route::post('/cadastro-cliente', [ClienteController::class, 'store'])->middleware(['auth'])->name('cliente.store');

Route::get('/cliente-listar', [ClienteController::class, 'listar'])->middleware(['auth'])->name('cliente.visao-listar');

Route::get('/cliente-show/{cliente}', [ClienteController::class, 'show'])->middleware(['auth'])->name('cliente.visao-show');
Route::put('/cliente-show/{cliente}', [ClienteController::class, 'update'])->middleware(['auth'])->name('cliente.update');

Route::get('/cliente-destroy/{cliente}', [ClienteController::class, 'destroy'])->middleware(['auth'])->name('cliente.destroy');
