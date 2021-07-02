<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::post('login', 'LoginController@index')->name('login');

Route::get('/departments', function () {
    return view('departamentos');
});

Route::view('/user', 'usuarios');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
