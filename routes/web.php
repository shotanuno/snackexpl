<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SnackController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [SnackController::class, 'index']);
Route::get('/snacks/create', [SnackController::class, 'create']);
Route::get('/snacks/{snack}', [SnackController::class, 'show']);
Route::post('/snacks', [SnackController::class, 'store']);
Route::get('/snacks/{snack}/edit', [SnackController::class, 'edit']);
Route::put('/snacks/{snack}', [SnackController::class, 'update']);

require __DIR__.'/auth.php';
