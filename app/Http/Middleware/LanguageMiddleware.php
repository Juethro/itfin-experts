<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userLang = $request->cookie('user_lang');
        $path = $request->path();

        // Jika user mengakses "/" langsung, redirect ke /id atau /en sesuai user_lang
        if ($path === '/' || $path === '') {
            if ($userLang === 'id') {
                return redirect('/id');
            } elseif ($userLang === 'en') {
                return redirect('/en');
            }
        }

        // Jika user_lang = 'en', cegah akses ke /id/*
        if ($userLang === 'en' && str_starts_with($path, 'id')) {
            return redirect('/en');
        }

        // Jika user_lang = 'id', cegah akses ke /en/*
        if ($userLang === 'id' && str_starts_with($path, 'en')) {
            return redirect('/id');
        }

        return $next($request);
    }

}
