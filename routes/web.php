<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProductoController;

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
    return view('auth.login');
});


Route::get('/dash', [App\Http\Controllers\DashController::class, 'index'])->name('dash');

//Route::resource('producto','App\Http\Controllers\ProductoController');
Route::get('/producto',[ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create',[ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/store',[ProductoController::class, 'store'])->name('producto.store');
Route::get('producto/edit/{id}',[ProductoController::class, 'edit'])->name('producto.edit');
Route::put('producto/update/{id}',[ProductoController::class, 'update'])->name('producto.update');






