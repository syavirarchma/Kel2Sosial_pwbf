<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;
    protected $table='provinsi';
    public function kota()
    {
        return $this->hasMany(kota::class,'id_kota', 'id');
    }
}
