<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Care_user extends Model
{
  protected $fillable = ['name','email','mob','password','password1','acctype'];
}
