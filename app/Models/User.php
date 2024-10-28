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
    }

    // mutators
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_id');
    }
}
