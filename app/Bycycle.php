<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bycycle extends Model
{
//    protected $guarded = array('id');
    protected $fillable = array('name', 'series');
}
