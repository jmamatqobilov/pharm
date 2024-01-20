<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dori extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dori_type',
        'price'
    ];


    public function doritype(){
        return $this->belongsTo(Doritype::class);
    }

    public function partiyainputs(){
        return $this->hasMany(Partiyainput::class);
    }

    public function partiyabrakes(){
        return $this->hasMany(Partiyabrak::class);
    }

    public function partiyaoutes(){
        return $this->hasMany(Partiyaout::class);    
    }
}
