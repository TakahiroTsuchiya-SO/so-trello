<?php

Route::get('/', function () {
    return view('top');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::resource('/projects', 'ProjectController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
    Route::post('projects/{project}', 'ProjectController@delete')->name('projects.delete');
    Route::resource('/projects/{project}/tasks', 'TaskController', ['only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']]);
});