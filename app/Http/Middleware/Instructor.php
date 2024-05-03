<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Instructor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth::user()->role;
        if ($role != 'instructor') {
            if ($role == 'user') {
                return redirect('dashboard');
            } elseif ($role == 'admin') {
                return redirect('admin/dashboard');
            }
        }
        return $next($request);
    }
}
