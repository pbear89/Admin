<?php

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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/users', function () {
    return view('pages.users');
});

Route::get('/user-add', function () {
    return view('pages.users-add');
});

Route::get('/user-list', function () {
    return view('pages.users-list');
});

Route::get('/list', function () {
    return view('pages.list');
});

Route::resource('/users1', 'UsersController');
