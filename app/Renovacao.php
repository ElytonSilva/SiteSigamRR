<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renovacao extends Model
{
    public function matricula() {
        return $this->belongsTo('App\Matricula');
    }

    protected $table = 'renovacao';
    protected $fillable = ['nomerespo','nomealuno','status'];
}
