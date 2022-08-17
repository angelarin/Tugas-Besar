<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    use HasFactory;
    public function banks(){
        return $this->belongsTo(Bank::class, 'id_bank');
    }
}
