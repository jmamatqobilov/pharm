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
        'employe_apteka',
        'employe_phone',
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function partys(){
        return $this->hasMany(Party::class);
    }

    
}
