<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = 'bills';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    public function BillDetail() {
    	return $this->hasMany('App\Http\Models\BillDetail','id_product','id');
    }

    public function Customers() {
    	return $this->belongsTo('App\Http\Models\Customers','id_customer','id');
    }


}
