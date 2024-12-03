<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role !== 'admin') {
            //if ($request->user() && $request->user()->role === 'admin') {
            return response()->json(['message' => 'Unauthorized'], 403);  // Si no es admin, responde con 403
        }

        return $next($request);
    }
}
