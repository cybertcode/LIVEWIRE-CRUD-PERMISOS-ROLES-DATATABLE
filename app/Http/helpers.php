<?php

use Illuminate\Support\Str;

function canView(string $permission): bool
{
    $permissions = auth()->user()->getAllPermissions();
    // dd($permissions);
    $permissions = $permissions->filter(function ($p) use ($permission) {
        return Str::contains($p->name, $permission);
    });
    return boolval($permissions->count());
}
// Para restrigir permisos del backend
function can(String $permission)
{
    if (!auth()->user()->can($permission)) {
        abort(403, 'Usted no tiene los permisos para continuar...');
    }
}
