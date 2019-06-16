<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/projects', 'ProjectsController@index');
    Route::get('/projects/{project}', 'ProjectsController@show');
    Route::get('/projects/create', 'ProjectsController@create');
    Route::post('/projects', 'ProjectsController@store');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();

