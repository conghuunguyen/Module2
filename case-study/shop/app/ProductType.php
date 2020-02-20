<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    // use SoftDeletes;
    protected $table = "type_products";

    public function product(){
    	return $this->hasMany('App\Product','id_type','id');
    }
}
