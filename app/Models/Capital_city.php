<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital_city extends Model
{
    use HasFactory;
     protected $fillable = [
        'city_name',
        'desertalw',
        'low',
        'medium',
        'high',
        'status',
        'created_at'
    ];
}
