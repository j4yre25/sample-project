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
Route::get('/page3', function(){
    return view('page3');
});

Route::get('/page4', function(){
    return view('page4');
});


Route::get('/page8', function(){
    return view('page8');
});

Route::get('/page5', function(){
    return view('page5');
});

Route::get('/page6', function(){
    return view('page6');

});

Route::get('/page9', function(){
    return view('page9');
});

Route::get('/page12', function(){
    return view('page12');
});