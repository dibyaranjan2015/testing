<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use Session;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        if(Session::has('ad_name'))
        {
          return view('admin/main_admin');
        }
        else
        {
          return view('admin/adminindex');  
        }
    }


    public function view(){
        return view('admin/admin_signup');  
    }
    
    public function check(Request $request){
        $ad_email = $request->input('admin_email');
        $password = $request->input('admin_pass');
        $password_user = md5(md5($password));
        $user = DB::table('members')->where('m_email', $ad_email)->where('m_password', $password_user)->first();
        if($user){

            $ad_type = $user->m_type;
            $ad_name = $user->m_name;
              session_start();
              Session::put('ad_name',$ad_name);
              Session::put('ad_type',$ad_type);
              if($ad_type==1){
                return view('admin/main_admin');
              }
              if($ad_type==2){
                return view('admin/main_admin');
              }
              if($ad_type==3){
                echo 'mc3';
              }
              if($ad_type==4){
                echo 'mc4';
              }
              if($ad_type==5){
                echo 'mc5';
              }

        }else{
            $error = "Username or password does not match";
            return view('admin/adminindex',['error'=>$error]);
        }
    }

    public function store(Request $request){
        $a_name = $request->input('admin_name');
        $a_pass = $request->input('admin_pass');
        $a_pass1 = $request->input('admin_pass1');
        $a_email = $request->input('admin_email');
        $a_type = $request->input('a_type');
        $hashpassword = md5(md5($a_pass));
        if($a_pass!=$a_pass1)
        {
          $error="Password does not match!!";
          return view('admin.admin_signup',['error'=>$error]);
        }
        else
         {
           DB::table('members')->insert(
               ['m_name'=>$a_name , 'm_email' => $a_email ,'m_password' =>$hashpassword , 'm_type'=>$a_type]
             );
        return redirect("/admin");
      }
    }
    public function logout(){
          Session::forget('name');
          Session::flush();
      return redirect('/admin');
    }
    
}























// public function check(){
    //  $tables = DB::select('SHOW TABLES');

    //  return view('admin/adminpannel',['tables'=>$tables]);
    // }

    // public function show($table){
        
    //  $columns = Schema::getColumnListing($table);
    //  $users = DB::table($table)->get();

        

    //  return view('admin/admintable',['columns'=>$columns , 'table'=>$table ,'users'=>$users]);
    // }