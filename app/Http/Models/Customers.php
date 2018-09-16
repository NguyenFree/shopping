<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    public function bills() {
    	return $this->hasMany('App\Http\Models\Bills','id_customer','id');
    }

    public function customerLogin() {
    	return $this->hasOne('App\Http\Models\CustomerLogin','id_customer','id');
    }

    public function reviews() {
    	return $this->hasMany('App\Http\Models\Reviews','id_customer','id');
    }

    public function comments() {
    	return $this->hasMany('App\Http\Models\Comments','id_customer','id');
    }
}
