<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::name('admin.dashboard.index')->get('/', 'CoreController@index');
});
