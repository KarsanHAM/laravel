<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public static $rules = [
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required'
    ];



}
