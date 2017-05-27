<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\Retailer;

use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function index(){
        if(Session::has('rt_name') && Session::has('rt_type'))
        {
          return redirect('retailer/domain');
        }
        else
        {
          return view('retailer/retailerindex');  
        }
    }

    public function signup(){
        if(Session::has('rt_name') && Session::has('rt_type'))
        {
          return redirect('retailer/domain');
        }
        else
        {
         return view('retailer/signup'); 
        }
        
    }

    public function store(Request $request){
        $r_name = $request->input('rt_name');
          $r_pass = $request->input('rt_pass');
          $r_pass1 = $request->input('rt_conf_pass');
          $r_email = $request->input('rt_email');

          $r_licence = $request->input('licence_no');
          $licence = md5(md5($r_licence));
          $hashpassword = md5(md5($r_pass));
          if($r_pass!=$r_pass1)
          {
            $error="Password does not match!!";
            return view('retailer/signup',['error'=>$error]);
          }
          else
           {
             DB::table('retailers')->insert(
                 ['r_name'=>$r_name , 'r_email' => $r_email ,'r_password' =>$hashpassword , 'r_licence_no'=>$licence]
               );
              session_start();
              Session::put('rt_name',$r_name);
              
              return redirect('/retailer/domain');
          }
    }


    public function check(Request $request){
        $r_email = $request->input('r_email');
        $licence = $request->input('r_licence_no');
        $r_licence = md5(md5($licence));
        $password = $request->input('r_pass');
        $password_user = md5(md5($password));
        $user = DB::table('retailers')->where('r_email', $r_email)->where('r_password', $password_user)
                                                ->where('r_licence_no', $r_licence)->first();
        if($user){

              $r_name = $user->r_name;
              session_start();
              Session::put('rt_name',$r_name);
              
              return redirect('/retailer/domain');
        }else{
             $error = 'Login credentials are incorrect!!';
             return redirect()->back()->with('error', $error);
        }
    }


    public function domain(){
        if(Session::has('rt_name')){

            return view('retailer/domain');
        }
    }

    public function logout(){
          Session::forget('name');
          Session::flush();
      return redirect('/retailer');
    }
}
