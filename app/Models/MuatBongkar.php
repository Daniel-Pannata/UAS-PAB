<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuatBongkar extends Model
{
    use HasFactory;

    protected $fillable = ['id_kontrakbeli','id_kontrakjual','truk','tanggalmuat','tanggalbongkar','muat','bongkar','susut','ongkos','totalongkos','potongan','totalhargaongkos'];

    public function kontrakjual(){
        return $this->belongsTo(KontrakJual::class,'id_kontrakjual','id');
    }
    public function kontrakbeli(){
        return $this->belongsTo(KontrakBeli::class,'id_kontrakbeli','id');
    }
}
