<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renovacao extends Model
{
    

    protected $table = 'renovacao';
    protected $fillable = ['nomerespo','nomealuno','status'];
	
	
}
