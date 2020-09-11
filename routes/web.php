<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** Главная */
Route::get('/', 'MainController@index')->name('mainPage');

Auth::routes();

/** Страницы товаров */
Route::get('/goods', 'GoodsController@index')->name('goods');
Route::get('/goods/create', 'GoodsController@create')->name('goodsCreate');
Route::get('/goods/{good}', 'GoodsController@show')->name('goodShow');
Route::post('/goods', 'GoodsController@store');
Route::get('/goods/{good}/edit', 'GoodsController@edit')->name('goodEdit');
Route::patch('/goods/{good}', 'GoodsController@update');
Route::delete('/goods/{good}', 'GoodsController@destroy');
