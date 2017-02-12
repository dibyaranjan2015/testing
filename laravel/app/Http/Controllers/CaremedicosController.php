<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Care_user;
use Session;

class CaremedicosController extends Controller
{
  

    public function signup(){
       return view('signup');
    }



    public function login(){
       return view('login');
    }


    // public function test(){
    //    $users = Care_user::all();
    //    return view('test',compact('users'));
    // }

    //register
    public function store(Request $request){
      // $datainput = $request->all();
      $name = $request->input('name');
      $email = $request->input('email');
      $mob = $request->input('mob');
      $password = $request->input('password');
      $password1 = $request->input('password1');
      $acctype = $request->input('acctype');
      $hashpassword = md5($password1);
      $rows = DB::table('care_users')->where('email', $email)->count();
      $rows1 = DB::table('care_users')->where('mob', $mob)->count();
      if(($rows==0)&&($rows1==0))
      {
             $error = '';
             if($name==''){
               $error = 'Enter your name </br>';
               return view('signup',['error'=>$error]);

             }elseif($email == ''){
               $error = 'Enter the email Id';
               return view('signup',['error'=>$error]);

             }elseif($password == '' || $password1=='' || ($password != $password1)){
               $error ='Error in password';
                return view('signup',['error'=>$error]);

              }else{
                // Care_user::create($datainput);
               DB::table('care_users')->insert(
                   ['username'=>$name , 'email' => $email ,'mob'=>$mob,'password' =>$hashpassword , 'acctype'=>$acctype]
                 );
                  session_start();
                  Session::put('name',$name);
                  //return redirect('/userpage/'.$name);
                  return redirect('/');
              }
      }
      else if ($rows!=0) {
        return view('signup',['error'=>'A user with that email id is already registered!']);
      }
      else
      {
          return view('signup',['error'=>'A user with that mobile number is already registered! ']);
      }
      
    }

     // login
    public function check(Request $request){
        $email_user = $request->input('email');
        $password = $request->input('password');
        $password_user = md5($password);
        $acctype_user = $request->input('type');
        $user = DB::table('care_users')->where('email', $email_user)->first();
        if($user){
          $name = $user->username;
          $email_db = $user->email;
          $password_db = $user->password;
          $acctype_db = $user->acctype;
        
          if($email_user == $email_db  && $password_user == $password_db){
            if($acctype_user == $acctype_db){
              
              session_start();
              Session::put('name',$name);

              //return redirect('/userpage/'.$name);
              return redirect('/');
            }else{
               if($acctype_user == 1){$message = 'Login as Doctor';  }
               if($acctype_user == 2){$message ='Login as Patient'; } 
                //echo $message;
               return view('/login',['message' => $message]);
            }
          }else{
            $message= 'Incorrect password';
            return view('/login',['message' => $message]);
          }
        }else{
          $message = 'You must register first';
          return view('/login',['message' => $message]);
        }
    }

    //user view
    public function user($name){
      return view('userpage',['name'=>$name]);
    }

    //logout
    public function logout(){
          Session::forget('name');
          Session::flush();
      return redirect('/');
    }
}
