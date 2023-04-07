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
