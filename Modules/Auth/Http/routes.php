<?php

Route::group(['middleware' => 'web', 'prefix' => 'auth', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
    Route::name('auth.index')->get('/', 'AuthController@index');
    Route::name('auth.register')->get('/register', 'AuthController@register');
    Route::name('auth.registerMe')->post('/registerMe', 'AuthController@createNewUser');
    Route::name('auth.logout')->get('/logout', 'AuthController@logout');
    Route::name('auth.login')->post('/login', 'AuthController@login');

});
