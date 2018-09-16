<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerLogin extends Model
{
    protected $table = 'customer_login';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    public function customer() {
    	return $this->hasOne('App\Http\Models\customers','id_customer','id');
    }
}
