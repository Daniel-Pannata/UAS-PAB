<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrakBeli extends Model
{
    use HasFactory;
    public function supplier(){
        return $this->belongsTo(Supplier::class,'id_supplier','id');
    }
}
