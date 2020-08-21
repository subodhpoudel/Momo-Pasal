<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Momo extends Model
{
    //
    protected $casts= [
        'colddrinks' => 'array' // when saving to db, the array is stored as json string
    //the above code will convert that json string to array
    ];
}
