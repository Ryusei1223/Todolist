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
Route::group(["middleware"=>["auth"],],function(){
    Route::get('/','CategoryController@category');
    Route::get('/add_category','CategoryController@add_category');
    Route::delete('/categories/{category}/delete','CategoryController@destroy');
    Route::get('/categories/{category}','TaskController@index');
    Route::get('/categories/{category}/create','TaskController@create');
    Route::get('/categories/{category}/tasks/{task}/edit','TaskController@edit');
    Route::put('/categories/{category}/tasks/{task}','TaskController@update');
    Route::delete('/categories/{category}/tasks/{task}','TaskController@destroy');
    Route::post('/','CategoryController@store');
    Route::post('/categories/{category}','TaskController@store');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
