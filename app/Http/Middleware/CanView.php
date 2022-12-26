<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CanView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        $permissions = auth()->user()->getPermissionsViaRoles();
        // dd($permissions);
        $permissions = $permissions->filter(function ($p) use ($permission) {
            return Str::contains($p, $permission);
        });
        if ($permissions->count()) {

            return $next($request);
        } else {
            abort(403, 'Usted no tiene los permisos para visualizar esta página');
        }
    }
}
