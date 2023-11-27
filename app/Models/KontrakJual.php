<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontrakJual extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
}
