<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = ['m_name','m_password	','m_email','m_type'];

    protected $hidden = ['m_password',];
}
