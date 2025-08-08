<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // For auth compatibility
use Illuminate\Notifications\Notifiable;

class Signup extends Authenticatable
{
    use Notifiable;

    protected $table = 'signups';

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'password',
    ];

    // Hide password when serialized
    protected $hidden = [
        'password',
    ];

    // Automatically hash password when set
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}



