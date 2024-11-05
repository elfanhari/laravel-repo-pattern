<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::loginUsingId(4);

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('user.product.index');
});

Route::get('/user/product', [\App\Http\Controllers\User\ProductController::class, 'index'])->name('user.product.index');
Route::get('/admin/product/{user_id}', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');
