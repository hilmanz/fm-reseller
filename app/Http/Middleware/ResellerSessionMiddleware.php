<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class ResellerSessionMiddleware
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

        $sess = session('reseller_session');

        if(!isset($sess)){
            return redirect('/login');
        }else{
            if(!isset($sess['id'])){
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
