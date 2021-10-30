<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelaporan extends Model
{
    use HasFactory;
    protected $table='pelaporan';
    public function users()
    {
        return $this->belongsTo(users::class,'id_user','id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class,'id_kecamatan', 'id');
    }
    public function detail_korban()
    {
        return $this->hasMany(detail_korban::class,'id_detail_korban', 'id');
    }
}
