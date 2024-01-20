<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partiyainput extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'dori_id',
        'warehouse_id',
        'price'
    ];

    public function dori(){
        return $this->belongsTo(Dori::class);
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    
}
