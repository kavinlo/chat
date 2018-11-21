<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = ['sendA','reciveA','message'];
    public $timestamps = false;
}
