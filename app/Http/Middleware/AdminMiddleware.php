<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an administrator
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }

        // Redirect or return error response if not an admin
        return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
    }
}
