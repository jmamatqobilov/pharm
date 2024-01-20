<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partiyabrak extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'dori_id',
        'apteka_id'
    ];

    public function dori(){
        return $this->belongsTo(Dori::class);
    }


    public function apteka(){
        return  $this->belongsTo(Apteka::class);
    }
}
