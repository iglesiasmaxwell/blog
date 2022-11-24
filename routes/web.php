<?php

use App\Http\Controllers\KontenController;
// use App\Models\Konten;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/blog', function () {
    return view('content', [
    'konten' => []
    ]);
});

Route::get('/crud/index', [KontenController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [KontenController::class, 'create'])->name('crud.create');
Route::post('/crud/store', [KontenController::class, 'store'])->name('crud.store');
Route::get('/crud/edit/{konten}', [KontenController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{konten}', [KontenController::class, 'update'])->name('crud.update');
Route::delete('/crud/index/{konten}', [KontenController::class, 'delete'])->name('crud.delete');