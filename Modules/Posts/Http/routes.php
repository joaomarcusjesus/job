<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Posts\Http\Controllers'], function()
{

    Route::prefix('posts')->group(function()
    {
        Route::name('admin.posts.index')->get('/', 'PostsController@index');
        Route::name('admin.posts.create')->get('/create', 'PostsController@create');
        Route::name('admin.posts.store')->post('/store', 'PostsController@store');
    });

    Route::prefix('categorias')->group(function()
    {
        Route::name('admin.posts_categories.index')->get('/', 'PostsCategory@index');
        Route::name('admin.posts_categories.create')->get('/create', 'PostsCategory@create');
        Route::name('admin.posts_categories.store')->post('/store', 'PostsCategory@store');
    });


});
