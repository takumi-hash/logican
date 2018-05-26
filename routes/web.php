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

Route::get('/', function () {
    return view('index');
});
Route::get('loggedin_user_top', function () {
    return view('loggedin_user_top');
});
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('content', function () {
    return view('content');
});
Route::get('profile_setting', function () {
    return view('profile_setting');
});
