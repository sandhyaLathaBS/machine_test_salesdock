<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';

    protected $fillable = ['first_name', 'last_name', 'postal_code', 'city'];


    public $timestamps = true;
}
