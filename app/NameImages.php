<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NameImages extends Model
{
    

    protected $fillable =  ['name', 'quant_votes', 'result'];
    protected $table = 'name_images';
}