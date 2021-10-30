<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_bencana extends Model
{
    use HasFactory;
    protected $table='kategori_bencana';

    public function bencana()
    {
        return $this->belongsTo(bencana::class,'id_bencana','id');
    }

   
    
}
