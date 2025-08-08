<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Fillable fields for mass assignment
    protected $fillable = [
        'email',
        'password',
    ];

    // Hidden fields in JSON responses
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
