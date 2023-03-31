<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->middleware('can:home')->name('home');

Route::get('/Pedidos', [App\Http\Controllers\HomeController::class, 'Pedidos'])->middleware('can:Pedidos')->name('Pedidos');
Route::get('/Domicilios', [App\Http\Controllers\HomeController::class, 'Domicilios'])->middleware('can:Domicilios')->name('Domicilios');
