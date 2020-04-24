<?php

#Lastfilefromuser.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckBoxTable extends Model
{
    

    protected $fillable =  ['name', 'quant_votes'];
    protected $table = 'name_images';
}