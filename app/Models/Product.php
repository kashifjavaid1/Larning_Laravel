<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Product extends Model
{
    use HasFactory;
    protected $table="products";
 //  ONE TO ONE Realtion

    // function onetoOne(){
    //     return $this->hasOne("App\Models\Product","seller-id");
    // }

    //  ONE TO MANY
    // function onetoOne(){
    //     return $this->hasMany("App\Models\Product","seller-id");
    // }

 

    // // Many to One Relation
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'seller_id');
    // }
  
}




  