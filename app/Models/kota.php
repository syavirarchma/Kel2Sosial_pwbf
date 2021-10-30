<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;
    protected $table='kota';
    public function kecamatan()
    {
        return $this->hasMany(kecamatan::class,'id_kecamatan','id');
    }

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class,'id_provinsi', 'id');
    }
}
