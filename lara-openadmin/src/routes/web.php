<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
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

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news/{id}', [Controllers\HomeController::class, 'show'])->name('news.show');

Route::get('/test1', [Controllers\Mypage\NewsController::class, 'test1']);

Route::post('/test1', [Controllers\Mypage\NewsController::class, 'test1']);

//Route::get('/aaa/', Controllers\XController::class);
