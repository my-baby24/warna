<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role == Admin::ROLE_SUPERADMIN){

            return $next($request);

        }elseif ($request->user()->role == Admin::ROLE_AdminJar){
            return $next($request);
        }elseif ($request->user()->role == Admin::ROLE_AdminPelayanan){
            return $next($request);
        }elseif ($request->user()->role == Admin::ROLE_AdminKeuangan){
            return $next($request);
        }elseif ($request->user()->role == Admin::ROLE_AdminPmk){
            return $next($request);
        }
        else{
        abort(401);
        }
        
    }
}
