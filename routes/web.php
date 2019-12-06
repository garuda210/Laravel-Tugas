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



Route::get('/', 'PagesController@home');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/about', 'PagesController@about');



Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{students}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
