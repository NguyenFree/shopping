<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_detail';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

   	public function products() {
   		return $this->hasMany('App\Http\Models\products','id_product','id');
   	}

   	public function bills() {
   		return $this->belongsTo('App\Http\Models\bills','id_bill','id');
   	}

}


