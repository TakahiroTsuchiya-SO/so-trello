<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    // Route::get('/projects/{project}/tasks', 'TaskController@index')->name('tasks.index');
    // Route::get('/projects/{project}/tasks/create', 'TaskController@create')->name('tasks.create');
    Route::resource('/projects', 'ProjectController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
    Route::resource('/projects/{project}/tasks', 'TaskController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
});