<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('global.index');
});

Route::get('/about', function () {
    return view('global.about');
});

Route::get('/contact', function () {
    return view('global.contact');
});

Route::get('/portfolio', function () {
    return view('global.portfolio');
});