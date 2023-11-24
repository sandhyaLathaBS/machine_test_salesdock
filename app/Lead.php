<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
	protected $table = 'leads';

    protected $fillable = ['first_name', 'last_name', 'postal_code'];


    public $timestamps = true;
}
