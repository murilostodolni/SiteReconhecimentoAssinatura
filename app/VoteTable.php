<?php

#Lastfilefromuser.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteTable extends Model
{
    

    protected $fillable =  ['user_id', 'image_name','vote','result'];
    protected $table = 'votes';
}
