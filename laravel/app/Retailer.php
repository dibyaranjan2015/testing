<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    protected $table = 'retailers';

   protected $fillable = ['rt_name','rt_email','rt_pass','licence_no'];

   protected $hidden = ['p_id','rt_pass'];
}
