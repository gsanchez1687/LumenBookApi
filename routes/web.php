<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/v1/books','BookController@index');
Route::post('/api/v1/books','BookController@store');
Route::get('/api/v1/books/{book}','BookController@show');
Route::put('/api/v1/books/{book}','BookController@update');
Route::patch('/api/v1/books/{book}','BookController@destroy');