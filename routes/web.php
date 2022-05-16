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

Route::get('/', [App\Http\Controllers\DownloadHistoryController::class, 'popular'])->name('welcome');



Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\DownloadHistoryController::class, 'popular2'])->name('home');
    Route::get('/share', [App\Http\Controllers\HomeController::class, 'share'])->name('share');
    Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
    Route::get('/profile', function(){return view ('profile');})->name('profile'); 

    Route::get('/explore', [App\Http\Controllers\ShareController::class, 'index'])->name('explore');
    Route::get('/share/tambah', [App\Http\Controllers\ShareController::class, 'tambahshare'])->name('tambahshare');
    Route::post('/share/simpan', [App\Http\Controllers\ShareController::class, 'simpanshare'])->name('simpanshare');
    Route::get('/explore/item/{id}', [App\Http\Controllers\ShareController::class, 'item'])->name('item');
    Route::get('/explore/item/download/{id}', [App\Http\Controllers\ShareController::class, 'download'])->name('download');
    Route::post('/explore/item/download/history', [App\Http\Controllers\DownloadHistoryController::class, 'download_history_item'])->name('download_history_item');
    
    Route::get('/myprofile',  [ShareController::class, 'myprofile'])->name('myprofile');
    Route::get('/myprofile/delete/item/{id}', [App\Http\Controllers\ShareController::class, 'delete'])->name('delete');
    Route::get('/myprofile/edit/item/{id}', [ShareController::class, 'edititem'])->name('edititem');
    Route::post('/myprofole/update/item/{id}', [ShareController::class, 'updateitem'])->name('updateitem');
    Route::get('/myprofile/deletehistory/item/{id}', [App\Http\Controllers\DownloadHistoryController::class, 'deletehistory'])->name('delete.history');

    Route::get('/profile/{id}', [ShareController::class, 'userprofile'])->name('profile');

    Route::get('/explore/search', [App\Http\Controllers\ShareController::class, 'search'])->name('search');
});
