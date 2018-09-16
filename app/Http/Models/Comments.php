<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    public function customer() {
    	return $this->belongsTo('App\Http\Models\Customers','id_customer','id');
    }

    public function product() {
    	return $this->belongsTo('App\Http\Models\Products','id_product','id');
    }
}
