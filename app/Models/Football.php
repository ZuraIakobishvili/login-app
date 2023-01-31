<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Football extends Authenticatable
{
    protected $guarded = [];
    use HasFactory; 


    protected $fillable = [
        'name',
        'email',
        'club',
        'country',
        'password'
    ];
}
