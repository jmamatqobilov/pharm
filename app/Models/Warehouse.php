<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function partiyainputes(){
        return $this->hasMany(Partiyainput::class);
    }

    public function partiyaoutes(){
        return $this->hasMany(Partiyaout::class);
    }
}
