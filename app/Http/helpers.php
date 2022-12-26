<?php

use Illuminate\Support\Str;

function canView(string $permission): bool
{
    $permissions = auth()->user()->getPermissionsViaRoles();
    // dd($permissions);
    $permissions = $permissions->filter(function ($p) use ($permission) {
        return Str::contains($p->name, $permission);
    });
    return boolval($permissions->count());
}
