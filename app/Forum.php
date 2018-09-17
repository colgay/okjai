<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public $table = 'forum';
 
    public $fillable = ['name', 'desc', 'url'];
}
