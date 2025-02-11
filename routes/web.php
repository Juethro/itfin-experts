<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;

// Terapkan middleware ke semua rute
Route::middleware(['language'])->group(function () {
    // Rute utama (harus dicegat oleh middleware)
    Route::get('/', function () {
        return view('global.index');
    });

    // Global Route (English)
    Route::prefix('en')->group(function () {
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
        Route::get('/technology', function () {
            return view('global.technology');
        });
    });

    // Indonesia Route
    Route::prefix('id')->group(function () {
        Route::get('/', function () {
            return view('indonesia.index');
        });
        Route::get('/tentang', function () {
            return view('indonesia.tentang');
        });
        Route::get('/kontak', function () {
            return view('indonesia.kontak');
        });
        Route::get('/portfolio', function () {
            return view('indonesia.portfolio');
        });
        Route::get('/teknologi', function () {
            return view('indonesia.teknologi');
        });
        Route::get('/keuangan', function () {
            return view('indonesia.keuangan');
        });
    });
});



// Rute Untuk Generate user_lang
Route::get('/detect-language', [LanguageController::class, 'index']);

// Send Mail
Route::post('/sendcontact', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');