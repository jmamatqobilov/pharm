<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'apteka_id',
        'warehouse_id',
        'quantity',
        'price',
        'status',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function apteka(){
        return $this->belongsTo(Apteka::class);
    }
}
