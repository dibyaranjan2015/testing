<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailer;
use App\Care_user;
use App\Mail\SendMail;

class ResetpasswordController extends Controller
{
    public function index(){
    	return view('mail.index');
    }

    public function send_mail(Request $request,Mailer $mailer){
    	$email = $request->input('resetmail');
    	$user = DB::table('care_users')->where('email', $email)->first();

    	if($user){
    		$link = md5(md5($email.'@+$@#$%^&^%$%^&*'.rand(1,999999)));

    		
    		DB::table('care_users')
            ->where('email', $email)
            ->update(['resetlink' => $link]);
            $id = $user->id;

            // $mailer->to($email)->send(new SendMail($link,$id));

          return view('mail.resetmail',['link'=>$link,'id'=>$id]);

    		$email_msg = 'Reset link is sent to your Email Id!!';
    		// return view('login',['email_msg'=>$email_msg]);

    	}else{
    		$message = 'Email is not registered';
    		return view('mail.index',['message'=>$message]);
    	}
    }


    public function reset($link,$id){
    	 $user = DB::table('care_users')->where('resetlink', $link)->first();
    	 if($user){
    	 	return view('mail.newpass',['link'=>$link,'id'=>$id]);
    	 }else{
    	 	return redirect('/');
    	 }
    }


    public function store(Request $request){
    	$id = $request->input('fa');
    	$link = $request->input('rl');
    	$newpass = $request->input('new_pass');
    	$confpass=$request->input('conf_new_pass');

    	if($newpass == $confpass){
    		$user = DB::table('care_users')->where('resetlink', $link)->where('id',$id)->first();
    	    if($user){
    	    	$password = md5($newpass);
    	    	DB::table('care_users')
	            ->where('id', $id)
	            ->update(['password' => $password]);

	            return redirect('/login?reset=1');
    	    }
    		
    	}else{
    		$error = "Passwords didn't match";
    		return redirect()->back()->with('error', $error); 
    	}

    }
}
