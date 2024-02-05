<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City_scale extends Model
{
    use HasFactory;
    protected $fillable = [
        'region',
        'level',
        'low',
      'medium',
      'high',
        
    ];
}
