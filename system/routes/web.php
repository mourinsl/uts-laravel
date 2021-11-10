<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostinganController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtikelController;

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
Route::get('beranda', [ClientController::class, 'Beranda']);
Route::get('postingan', [ClientController::class, 'Postingan']);
Route::get('artikel/{postingan}', [ClientController::class, 'Artikel']);
Route::post('artikel/{postingan}', [ClientController::class, 'store']);


Route::get('Admin/login', [AuthController::class, 'showLogin']);
Route::post('Admin/login', [AuthController::class, 'LoginProcess']);
Route::get('Admin/logout', [AuthController::class, 'logout']);

Route::get('Admin/beranda', [BerandaController::class, 'showBeranda']);
Route::prefix('Admin')->group(function(){
	Route::resource('tags', TagsController::class);
	Route::resource('postingan', PostinganController::class);
	Route::post('postingan/cari', [ProdukController::class, 'cari']);
	Route::resource('user', UserController::class);
});
