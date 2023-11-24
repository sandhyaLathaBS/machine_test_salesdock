<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';

    protected $fillable = ['first_name', 'last_name', 'postal_code', 'city', 'street_name'];


    public $timestamps = true;
}
