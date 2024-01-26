<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'region_id',
        'name',
        'address',
        'employe_client',
        'employe_phone',
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function partys(){
        return $this->hasMany(Party::class);
    }

    
}
