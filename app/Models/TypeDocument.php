<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
    protected $fillable = [
        'typeDocument_name',
        'typeDocument_status'
    ];

    protected $casts = [
        'typeDocument_status' => 'boolean',
    ];
}
