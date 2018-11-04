<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{
    protected $table = 'anotacao';
    protected $fillable = ['lembrete', 'dataInicio', 'horaInicio', 'horaTermino'];
}
