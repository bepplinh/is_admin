<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Admin\createUserController;

Route::get('/', function () {
    return view('client.home');
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/admin', function () {
            return view('admin.indexAdmin');
        });

        Route::get('/showCreateUser', [createUserController::class, 'showCreateUser']);
        Route::post('/createUser', [createUserController::class, 'createUser'])->name('createUser');
        Route::resource('products', ProductController::class);
    });

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});


Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('actionLogin');
Route::get('/register', [RegisterController::class, 'registerForm']);

Route::get('/client', function () {
    return view('client.home');
});




    