<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    
    Route::get('/', 'HomeController@main');
    
    Route::get('/login', 'LoginController@main');
    
    //Route::get('/projects/', 'ProjectsController@main');
    
    //Route::get('/project/{id}', 'ProjectController@main');
    
});
