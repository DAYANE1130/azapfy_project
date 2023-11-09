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
            $response->status(404);
            throw new \Exception('Pagina não encontrada ou verifique  se o endereço foi digitado corretamente');
        }
    
        return $response;
    }
    
}
