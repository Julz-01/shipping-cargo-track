<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
     protected $fillable = [
        'blnumber', 'container', 'consignee','port','discharge',
    ];
}
