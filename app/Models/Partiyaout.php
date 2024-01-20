<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partiyaout extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'dori_id',
        'apteka_id',
        'warehouse_id',
        'price',
        'created_by'
    ];

    public function dori(){
        return $this->belongsTo(Dori::class);
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function apteka(){
        return  $this->belongsTo(Apteka::class);
    }
}
