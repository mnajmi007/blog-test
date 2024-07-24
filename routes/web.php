<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-register', 'App\Http\Controllers\blogController@adminRegister');
Route::get('/admin-login', 'App\Http\Controllers\blogController@adminLogin');
Route::get('/post-author', 'App\Http\Controllers\blogController@postAuthor');
Route::get('/post-admin', 'App\Http\Controllers\blogController@postAdmin');
Route::get('/beranda-admin', 'App\Http\Controllers\blogController@berandaAdmin');


Route::post('/store-author', 'App\Http\Controllers\blogController@storeAuthor');
Route::post('/store-admin', 'App\Http\Controllers\blogController@storeAdmin');
Route::post('/store-daftar', 'App\Http\Controllers\blogController@storeDaftar');
Route::post('/store-login', 'App\Http\Controllers\blogController@storeLogin');