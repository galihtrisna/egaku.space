<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShareController;

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



Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/share', [App\Http\Controllers\HomeController::class, 'share'])->name('share');
    Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout'); 

    Route::get('/explore', [App\Http\Controllers\shareController::class, 'index'])->name('explore');
    Route::get('/share/tambah', [App\Http\Controllers\shareController::class, 'tambahshare'])->name('tambahshare');
    Route::post('/share/simpan', [App\Http\Controllers\shareController::class, 'simpanshare'])->name('simpanshare');
    Route::get('/explore/item/{id}', [App\Http\Controllers\shareController::class, 'item'])->name('item');
    Route::get('/explore/item/download/{id}', [App\Http\Controllers\shareController::class, 'download'])->name('download');
});
