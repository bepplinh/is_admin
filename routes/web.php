<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\createUserController;
use App\Http\Controllers\auth\LogoutController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('client');
    });


    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/admin', function () {
            return view('admin');
        });
        Route::get('/showCreateUser', [createUserController::class, 'showCreateUser']);
        Route::post('/createUser', [createUserController::class, 'createUser'])->name('createUser');
        Route::resource('products', ProductController::class);
    });

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});


Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('actionLogin');

Route::get('/home', function () {
    return view('layout.app');
});




    