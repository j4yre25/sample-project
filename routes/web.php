<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function(){
    return view('page');
});


Route::get('/page2', function(){
    return view('page2');
});