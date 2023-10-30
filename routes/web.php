<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::post('/logout', 'UserController@logout');
Route::get('/userLogin', 'UserController@userLogin');
Route::get('/userLogin', 'UserController@userLogin')->middleware('auth');
Route::post('/update-userLogin', 'UserController@updateuserLogin');
