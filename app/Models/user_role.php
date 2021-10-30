<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    use HasFactory;
    protected $table='user_role';
    public function users()
    {
        return $this->belongsTo(users::class,'id_user', 'id');
    
    }
    public function role()
    {
        return $this->belongsTo(role::class,'id_role', 'id');
    }
}
