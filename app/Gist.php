<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gist extends Model
{
    protected $fillable = [
        'name', 'content',
    ];
}
