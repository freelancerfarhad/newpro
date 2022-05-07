<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class demoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $rest=$request->token;

        if($rest=="farhad"){
            return $next($request);
        }else{
return response('<h1>not working data found</h1>');
        }
        
    }
}
