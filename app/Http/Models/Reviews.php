<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    public function customers(){
    	return $this->belongsTo('App\Http\Models\Customers');
    }

    public function product() {
    	return $this->belongsTo('App\Http\Models\Product','id_product','id');
    }
}
