<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa;

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
    return view('main');
});

// Route::get('/test', 'App\Http\controllers\mahasiswa@index');
route::get('/test', [mahasiswa::class,'index']);
// route::post('/detail_mahasiswa', [mahasiswa::class,'detail']);

Route::match(['get', 'post'], '/detail_mahasiswa', [mahasiswa::class, 'detail']);

// Route::view('detail_mahasiswa', 'detail_mahasiswa');

use App\Http\Controllers\AdminController;
Route::get('/',[AdminController::class,'index']);
Route::get('/admin/FirstChapter',[AdminController::class,'first']);
Route::get('/admin/SecondChapter',[AdminController::class,'second']);
Route::get('/admin/ThirdChapter',[AdminController::class,'third']);
Route::get('/admin/FourthChapter',[AdminController::class,'fourth']);
Route::get('/admin/FinalChapter',[AdminController::class,'final']);
Route::get('/admin/postingan',[AdminController::class,'postingan']);
Route::get('/admin/user',[AdminController::class,'user']);

Route::get('/admin/user/{id}/edit',[AdminController::class,'edit_user'])->name('users.edit');

Route::put('/admin/user/{id}',[AdminController::class,'update_user'])->name('users.update');
Route::delete('/admin/user/{id}/delete',[AdminController::class,'delete_user'])->name('users.deleteuy');
// Route::delete('/admin/user/{id}/delete',[AdminController::class,'delete_user'])->name('users.deleteuy');

Route::get('/admin/postingan/{id}/edit',[AdminController::class,'edit_post'])->name('posts.edit');

Route::put('/admin/postingan/{id}',[AdminController::class,'update_post'])->name('posts.update');
Route::delete('/admin/postingan/{id}/delete',[AdminController::class,'delete_post'])->name('posts.delete');

Route::get('/admin/create',[AdminController::class,'create_post']);
Route::get('/admin/create_user',[AdminController::class,'create_user']);
Route::post('/admin/store_post',[AdminController::class,'store_post']);
Route::post('/admin/store_user',[AdminController::class,'store_user']);


