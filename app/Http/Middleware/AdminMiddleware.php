<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // ADMIN ROLE = 0
            // USER ROLE = 1
            if (Auth::user()->role == '0') {
                return $next($request);
            } else {
                return redirect('/')->with('message', 'Kamu tidak bisa mengakses halaman Ini');
            }
        } else {
            return redirect('/login')->with('message', 'Login untuk Masuk halaman Ini');
        }
        return $next($request);
    }
}
