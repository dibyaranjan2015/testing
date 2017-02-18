<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

   protected $fillable = ['p_id','user_id','image','address'];

   protected $hidden = ['p_id','user_id'];
}
