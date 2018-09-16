<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use phpDocumentor\Reflection\Types\This;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    public function BillDetail() {
    	return $this->hasMany('App\Http\Models\Bills','id_product','id');
    }

    public function productType () {
        return $this->belongsTo('App\http\Models\productType','id_product_type','id');
    }

    public function comments() {
    	return $this->hasMany('App/Http/Models/comments','id_product','id');
    }

    public function reviews() {
    	return $this->hasMany('App/Http/Models/reviews','id_product','id');
    }
    
}
