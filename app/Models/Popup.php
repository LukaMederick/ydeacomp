<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    //
    protected $fillable = [
        'name', 'url', 'status', 'image',
    ];
}
