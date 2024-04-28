<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TodoController::class, 'welcome'])->name('welcome'); 
// welcomeのurlにアクセスするとTodoControllerクラスのwelcome関数が実行される。
Route::post('/store', [TodoController::class, 'store'])->name('store'); 
// storeのurlにアクセスするとTodoControllerクラスのstore関数が実行される。
