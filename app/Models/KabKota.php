<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function getProvinsi(){
        return $this->belongsTo(Provinsi::class,'provinsi_id','id');
    }
}
