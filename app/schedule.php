<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
    	 'vessel', 'voy', 'shihu','weitou','xiamen','north','south', 
    ];
}