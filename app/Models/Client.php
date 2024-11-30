<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client_name',
        'client_last_name',
        'client_phone',
        'client_ocupation',
        'client_status',
    ];

    protected $casts = [
        'client_status' => 'boolean',
    ];
}
