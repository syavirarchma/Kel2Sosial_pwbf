<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{

    use HasFactory;
    protected $table='users';
    public function user_role()
    {
        return $this->belongsTo(User_Role::class,'id_user','id');
    }

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class,'id_laporan', 'id');
    }

}
