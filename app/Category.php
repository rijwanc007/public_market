<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =
    [
        'name',
        'image',
        'background-image',
        'description',
        'type',
    ];

    protected $table = 'categories';
}
