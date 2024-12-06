<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'drink_name',
        'drink_status'
    ];

    protected $casts = [
        'drink_status' => 'boolean',
    ];
}
