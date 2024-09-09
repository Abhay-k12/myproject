<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginpage');
});

Route::get('/foregtpass', function(){
    return view('forgetpass');
});

Route:: get('/home', function(){
    return view('home');
});

Route::get('/verify', function () {
    return view('construction');
});