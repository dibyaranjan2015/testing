<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function index(){
        if(Session::has('rt_name') && Session::has('rt_type'))
        {
          return redirect('admin/domain');
        }
        else
        {
          return view('admin/adminindex');  
        }
    }
}
