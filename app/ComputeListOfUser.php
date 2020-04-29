<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputeListOfUser extends Model
{
    public static $rules = [
        'image_name' => 'required|min:3|max:255'
    ];
    protected $fillable =  ['image_name', 'result_image', 'user_id'];
    protected $table = 'computelistofuser';
}
