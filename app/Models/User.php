<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    // accessors
    function getPhoneAttribute($val)
    {
        return " +92 ". $val;
    };

    
    // protected $fillable = ['name', 'email', 'phone'];
}
