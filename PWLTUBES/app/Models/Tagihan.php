<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    public function kegiatans(){
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}
