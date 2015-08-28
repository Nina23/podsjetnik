<?php


Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/dodavanje', [
    'uses' => 'HomeController@dodavanje',
    'as' => 'home'
]);

Route::get('language', 'HomeController@language');

Route::get('create', 'HomeController@create');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::resource('profil', 'UserController');

Route::resource('kod', 'KodController');