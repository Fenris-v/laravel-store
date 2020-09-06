<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('mainPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
