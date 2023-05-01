<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class AdminAuthMiddleware
{

public function handle(Request $request, Closure $next)
{
if (Auth::user() && Auth::user()->getRole() == 'admin') {
return $next($request);
} else {
return redirect()->route('home.index');
}
}
}