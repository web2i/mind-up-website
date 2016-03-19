<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    Route::get('/test', 'TestController@main');
    
    Route::get('/', 'HomeController@main');
    
    Route::get('/login', 'LoginController@main');
    Route::post('/login', 'LoginController@main');
    
    Route::get('/team', 'TeamController@main');
    
    Route::get('/projects', 'ProjectsController@main');
    
    Route::get('/inscription', 'InscriptionController@main');
    Route::post('/inscription', 'InscriptionController@main');
    
    Route::get('/private-home', 'PrivateHomeController@main');
    
    Route::get('/data', 'DataController@main');
    
    //Route::get('auth/login', 'Auth\AuthController@getLogin');
    
    //Route::get('auth/login', 'Auth\AuthController@getLogin');
    
    //Route::get('/project/{id}', 'ProjectController@main');
    
    
    
});
