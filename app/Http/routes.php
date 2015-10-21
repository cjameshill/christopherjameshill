<?php

Route::get('/', [
    'as' => 'home', 'uses' => 'PagesController@index'
]);

Route::get('/home', [
    'as' => 'home', 'uses' => 'PagesController@index'
]);

Route::get('/about', [
    'as' => 'about', 'uses' => 'PagesController@about'
]);

Route::controllers ([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('articles', 'ArticlesController');
