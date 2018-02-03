<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heima extends Model
{
    protected $table = 'ceshi';
    protected $fillable = ['name','email','pwd'];
}
