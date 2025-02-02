<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // Deteksi Timezone dan Generate user_lang

    public function index(Request $request)
    {
         // Ambil timezone dari request
         $timezone = $request->query('timezone');

         // Daftar timezone yang dianggap Indonesia
         $indonesianTimezones = ['Asia/Jakarta', 'Asia/Pontianak', 'Asia/Makassar', 'Asia/Jayapura'];
 
         // Tentukan bahasa berdasarkan timezone
         $locale = in_array($timezone, $indonesianTimezones) ? 'id' : 'en';
 
         // Simpan preferensi ke cookie selama 30 hari
         return response()
            ->json(['locale' => $locale])
            ->cookie('user_lang', $locale, 60, '/', null, false, true)  // Untuk middleware (server-side)
            ->cookie('user_lang_js', $locale, 60, '/', null, false, false); // Untuk JavaScript
                
    }
}
