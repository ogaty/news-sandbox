<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mypage;

Route::group(['middleware' => 'verified'], function() {
    Route::get('/', [Mypage\HomeController::class, 'index'])->middleware(['verified'])->name('home');

    Route::get('/news/', [Mypage\NewsController::class, 'index'])->name('news.index');
    Route::get('/news/index', [Mypage\NewsController::class, 'index'])->name('news.index');
    Route::get('/news/', [Mypage\NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [Mypage\NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [Mypage\NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{id}', [Mypage\NewsController::class, 'edit'])->name('news.edit');
    Route::get('/news/show/{id}', [Mypage\NewsController::class, 'show'])->name('news.show');
    Route::get('/news/delete/{id}', [Mypage\NewsController::class, 'delete'])->name('news.delete');
});