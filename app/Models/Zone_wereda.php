<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone_wereda extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'level',
        'region',
        'desertalw',
        'status',
        'created_at'
    ];
}
