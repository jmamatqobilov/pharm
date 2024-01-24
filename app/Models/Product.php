<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'producttype_id',
        'price'
    ];


    public function producttype(){
        return $this->belongsTo(ProductType::class);
    }

    public function partys(){
        return $this->hasMany(Party::class);
    }

    
}
