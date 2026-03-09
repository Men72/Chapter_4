<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FakeAuth
{
    public function handle(Request $request, Closure $next)
    {
        $loggedIn = true; // change to true to allow access

        if (! $loggedIn) {
            return response('Access denied. Please log in.', 403);
        }

        return $next($request);
    }
}