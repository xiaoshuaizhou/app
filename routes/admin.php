<?php

//后台管理

Route::group(['prefix' => 'admin'], function (){
    //登录展示
    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    //登录提交
    Route::post('/login', '\App\Admin\Controllers\LoginController@login')
        ->name('/admin/login');
    //退出
    Route::post('/logout', '\App\Admin\Controllers\LoginController@logout')
    ->name('/admin/logout');
//    Route::group(['middleware' => 'authadmin'], function (){
        //后台首页
        Route::get('/index', '\App\Admin\Controllers\IndexController@index');
//    });
});
