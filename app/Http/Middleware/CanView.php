<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Nette\Utils\Strings;

class CanView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $permission)
    {
        // $permissions = auth()->user()->getPermissionsViaRoles();
        // // dd($permissions);
        // $permissions = $permissions->filter(function ($p) use ($permission) {
        //     return Str::contains($p->name, $permission);
        // });
        if (canView($permission)) {

            return $next($request);
        } else {
            abort(403, 'Usted no tiene los permisos para visualizar esta página');
        }
    }
}
