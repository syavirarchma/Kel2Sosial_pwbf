<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bencana extends Model
{
    use HasFactory;
    protected $table='bencana';
    public function kategori_bencana()
    {
        return $this->hasMany(kategori_bencana::class,'id_kategori_bencana','id');
    }

    public function pelaporan()
    {
        return $this->hasMany(Pelaporan::class,'id_laporan', 'id');
    }
}
