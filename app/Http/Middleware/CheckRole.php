<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userRole = "men";
        if ($userRole) {
            // Set scope as admin/moderator based on user role
            $request->request->add([
                'scope' => $userRole
            ]);
        }

        return $next($request);
    }
}
