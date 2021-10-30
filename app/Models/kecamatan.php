<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $table='kecamatan';
    public function kota()
    {
        return $this->belongsTo(kota::class,'id_kota','id');
    }

    public function pelaporan()
    {
        return $this->hasMany(Pelaporan::class,'id_laporan', 'id');
    }
}
