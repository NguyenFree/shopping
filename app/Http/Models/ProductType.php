<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_type';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    public function Products() {
    	return $this->hasMany('App\Http\Models\Products','id_product_type','id');
    }
}
