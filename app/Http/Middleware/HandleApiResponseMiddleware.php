<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleApiResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
    
        if (!$response->isSuccessful()) {
            $response->status(500);
            throw new \Exception('Por favor tente mais tarde ou verifique  se o endereço foi digitado corretamente');
        }
    
        return $response;
    }
    
}
