<?php

#Lastfilefromuser.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Lastfilefromuser extends Model
{
    public static $rules = [
        'last_file' => 'required|min:3|max:255'
    ];
    protected $fillable =  ['last_file'];
    protected $table = 'lastfilefromuser';
}
