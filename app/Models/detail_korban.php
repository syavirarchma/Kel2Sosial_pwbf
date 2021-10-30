<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_korban extends Model
{
    use HasFactory;
    protected $table='detail_korban';
    
    public function pelaporan()
    {
        return $this->hasMany(Pelaporan::class,'id_laporan', 'id');
    }
}
