<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'date',
        'comment'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
