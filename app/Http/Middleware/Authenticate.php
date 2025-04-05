<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;


class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    /**
    * This function overrides the default Authenticate middleware functionality when multiple guards/auth are used.
    */   
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            $routeName = Route::currentRouteName();

            // Ensure route name exists
            if ($routeName) {
                $groupname = explode('.', $routeName)[0];

                if ($groupname === 'admin') {
                    return route('admin.login');
                }
            }

            // Default redirect for regular users
            //return route('login');
            return route('index');
        }

        return null; // If it's an API request, return null to prevent redirection.
    }
}
