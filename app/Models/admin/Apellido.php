<?php

namespace App\Models\admin;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apellido extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lastname', 'user_id'];
    public function r_user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
