<?php

namespace App\Models;

use App\Models\admin\Apellido;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /*******************************************
     * Método para la relación con el apellido *
     *******************************************/
    public function r_lastname()
    {
        return $this->hasOne(Apellido::class, 'user_id', 'id');
    }
    /**************************************
     * Método para resetear los atributos *
     **************************************/
    public function getRolAttribute(): string
    {
        //si el rol de éeste objeto es admin retorna administrador
        if ($this->role === 'admin') {
            return 'Administrador';
        }
        //    Si es vendedor(seller) entonces retorna vendedor caso contrario cliente
        return $this->role === 'seller' ? 'Vendedor' : 'Cliente';
    }

    /***************************************
     * scope para el filtrado de apellidos *
     ***************************************/
    public function scopeTermino($query, $termino)
    {
        if ($termino === '') {
            return;
        }
        return $query->where('name', 'like', "%{$termino}%")
            ->orWhere('email', 'like', "%{$termino}%")
            ->orWhereHas('r_lastname', function ($query2) use ($termino) {
                $query2->where('lastname', 'like', "%{$termino}%");
            });
    }
    /***********************************
     * scope para el filtrado de roles *
     ***********************************/
    public function scopeRole($query, $role)
    {
        if ($role === '') {
            return;
        }
        //traernos info del camopo rol
        return $query->whereRole($role);
    }
}
