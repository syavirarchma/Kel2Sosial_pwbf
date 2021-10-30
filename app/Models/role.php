<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table='role';
    public function user_role()
    {
        return $this->hasMany(user_role::class,'id_user_role', 'id');
    }
}
