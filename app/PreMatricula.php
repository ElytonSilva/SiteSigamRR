<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreMatricula extends Model
{
    protected $table = 'prematricula';
    protected $fillable = ['nomemae','nomepai','nomealuno','contatomae','contatopai','cpfmae','cpfpai','senha'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
