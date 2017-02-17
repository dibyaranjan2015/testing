<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Care_user extends Model
{
  protected $table = 'care_users';

  protected $fillable = ['name','email','mob','password','acctype','resetlink'];

  protected $hidden = ['password','resetlink'];
}
