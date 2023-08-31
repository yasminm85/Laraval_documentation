<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;



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

Route::get('/', [PegawaiController::class, 'main']);
Route::get('/biodata', [PegawaiController::class, 'bio']);
Route::post('/sent', [PegawaiController::class, 'sent']);
Route::get('/master', [PegawaiController::class, 'master']);

Route::get('/data-table', function(){
    return view('halaman.table');
});

//Create kategori
Route::get('/kategori/create', [KategoriController::class, 'create']);
//parsing data kategori
Route::post('/kategori', [KategoriController::class, 'store']);
//tampil kategori
Route::get('/kategori', [KategoriController::class, 'tampil']);
//detail kategori
Route::get('/kategori/{kategori_id}', [KategoriController::class, 'show']);

//Edit kategori
Route::get('/kategori/{kategori_id}/edit', [KategoriController::class, 'edit']);
//Update data ke database 
Route::put('/kategori/{kategori_id}', [KategoriController::class, 'update']);

//Delete kategori
Route::delete('/kategori/{kategori_id}', [KategoriController::class, 'destroy']);


//ORM POST
Route::resource('post', PostController::class);
//ORM USER
Route::resource('users', UserController::class);
//ORM PROFILE
Route::resource('profile', ProfileController::class);



