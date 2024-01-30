<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnverifiedUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
