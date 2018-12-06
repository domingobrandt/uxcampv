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
    return view('welcome');
});

Route::get('/googlecb77e256ced0f5e3.html', function () {
    return view('googlecb77e256ced0f5e3');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
