<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfError
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Cek jika terjadi error (misalnya, status code 500)
        if ($response->getStatusCode() >= 500) {
            return redirect('/login');
        }

        return $response;
    }
}
