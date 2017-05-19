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
        return view('admin/adminindex');	
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
              session_start();
              Session::put('ad_email',$ad_email);
              Session::put('ad_type',$ad_type);
              if($ad_type==1){
                return view('admin/main_admin');
              }
              if($ad_type==2){
                echo 'mc2';
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
            echo 'madarchod thik se input daal nahito nikal yaha se';
        }
    }

    public function store(Request $request){
        $a_name = $request->input('admin_name');
        $a_pass = $request->input('admin_pass');
        $a_email = $request->input('admin_email');
        $a_type = $request->input('a_type');
        $hashpassword = md5(md5($a_pass));

        DB::table('members')->insert(
               ['m_name'=>$a_name , 'm_email' => $a_email ,'m_password' =>$hashpassword , 'm_type'=>$a_type]
             );
        echo 'madarchod ho gaya';
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