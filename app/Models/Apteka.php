<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apteka extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'region_id',
        'name',
        'address',
        'respon_person',
        'respon_person_phone',
        'created_by',
        'updated_by'
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function partiyabrakes(){
        return $this->hasMany(Partiyabrak::class);
    }

    public function partiyaoutes(){
        return $this->hasMany(Partiyaout::class);
    }
}
