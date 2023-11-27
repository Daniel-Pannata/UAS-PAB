<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuatBongkar extends Model
{
    use HasFactory;


    public function kontrakjual(){
        return $this->belongsTo(KontrakJual::class,'id_kontrakjual','id');
    }
    public function kontrakbeli(){
        return $this->belongsTo(KontrakBeli::class,'id_kontrakbeli','id');
    }
}
