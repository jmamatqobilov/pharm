<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doritype extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function dories(){
        return $this->hasMany(Dori::class);
    }
}
