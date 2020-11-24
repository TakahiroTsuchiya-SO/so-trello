<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('/projects', 'ProjectController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
    Route::get('projects/{project}', 'ProjectController@destroy')->name('projects.destroy');
    Route::resource('/projects/{project}/tasks', 'TaskController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
});