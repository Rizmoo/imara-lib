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

Route::resource('categories', 'CategoryController');
Route::resource('classes', 'ClassesController');
Route::resource('subjects', 'SubjectController');
Route::resource('files', 'FileController');

Route::get('subcat', 'CategoryController@subcat');

Route::get('/items', 'HomeController@items');
Route::get('/download', 'HomeController@download');
