<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title'=>'min:10|required',
        'content'=> 'min:500|required',
        'image'=>'string|nullable',
        'category'=>'',

    ];
}
