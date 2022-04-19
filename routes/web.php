<?php

use App\Http\Controllers\TokoController;
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

Route::get('/', function () {
    return view('welcome'); 
});

Route::group(['prefix' => 'toko', 'as' => 'toko.'], function(){
    Route::get('/', [TokoController::class, 'index'])->name('home');
});

Route::get('/', [TokoController::class, 'index'])->name('home');
Route::get('/buat', [TokoController::class, 'create'])->name('toko.tambah-data');
Route::post('/buat-data', [TokoController::class, 'store'])->name('toko.buat-data');

Route::get('/edit/{id}', [TokoController::class, 'edit'])->name('toko.edit');
Route::post('/update/{id}', [TokoController::class, 'update'])->name('toko.update');

Route::get('/', [TokoController::class, 'index'])->name('home');

Route::delete('/delete/{id}', [TokoController::class, 'destroy'])->name('toko.destroy');

Route::get('/detail/{id}', [TokoController::class, 'show'])->name('toko.show');

