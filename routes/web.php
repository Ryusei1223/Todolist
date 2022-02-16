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
Route::get('/','CategoryController@category');
Route::get('/add_category','CategoryController@add_category');
Route::get('/index/{id}','TaskController@index');
Route::get('/index/{id}/create','TaskController@create');
Route::get('/index/{id}/edit','TaskController@edit');
Route::get('/index/{id}/delete','TaskController@delete');
Route::post('/','CategoryController@store');
Route::post('/index/{id}','TaskController@store');




