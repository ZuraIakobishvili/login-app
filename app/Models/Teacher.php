<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $guarded = [];

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin'
    ];
}
