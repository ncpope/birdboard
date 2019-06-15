<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'ProjectsController@index')->middleware('auth');
Route::get('/projects/{project}', 'ProjectsController@show')->middleware('auth');
Route::post('/projects', 'ProjectsController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
