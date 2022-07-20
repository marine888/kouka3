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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 効果測定3
Route::get('kouka3', 'kouka_3Controller@index');
Route::post('kouka3/find', 'kouka_3Controller@find');
Route::get('kouka3/show', 'kouka_3Controller@show');
Route::get('kouka3/add', 'kouka_3Controller@add');
Route::post('kouka3/create', 'kouka_3Controller@create');
Route::get('kouka3/edit', 'kouka_3Controller@edit');
Route::post('kouka3/update', 'kouka_3Controller@update');
Route::get('kouka3/del', 'kouka_3Controller@del');
Route::post('kouka3/remove', 'kouka_3Controller@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
