<?php

use Illuminate\Support\Facades\Route;

// Global Route
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

// Indonesia Route
Route::get('/tentang', function () {
    return view('indonesia.tentang');
});

Route::get('/kontak', function () {
    return view('indonesia.kontak');
});

Route::get('/portfolio', function () {
    return view('indonesia.portfolio');
});