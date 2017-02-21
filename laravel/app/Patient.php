<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

   protected $fillable = ['p_id','user_id','image','gender','country','state','district','city','str_address','landmark','bloodgroup','rhesusfactor','identificationmarks','zipcode'];

   protected $hidden = ['p_id','user_id'];
}
