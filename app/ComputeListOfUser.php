<?php

#Lastfilefromuser.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputeListOfUser extends Model
{
    public static $rules = [
        'last_file' => 'required|min:3|max:255'
    ];
    protected $fillable =  ['last_file', 'user_id'];
    protected $table = 'computeListOfUser';
}
