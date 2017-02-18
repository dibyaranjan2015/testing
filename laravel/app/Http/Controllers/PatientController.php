<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Care_user;
use Session;
use App\Patient;

class PatientController extends Controller
{
    public function index(){
    	if(Session::has('name')&& Session::has('id')) {
    		$name=Session::get('name');
    		$id = Session::get('id');
    		$user = DB::table('care_users')->where('username',$name)->where('id', $id)->first();
    		$email = $user->email;
		    return view('patient_prof.index',['user'=>$user]);
    	}else{
    		 return redirect('/');
    	}
    }

    public function store(Request $request){
    	if(Session::has('name')&& Session::has('id')) {
    		$name=Session::get('name');
    		$id = Session::get('id');
    		$user = DB::table('care_users')->where('username',$name)->where('id', $id)->first();

    		$image = $request->file('image');
    		$address = $request->input('address');

    		$unique_user = DB::table('patients')->where('user_id',$id)->first();
    		if($unique_user){
    			DB::table('patients')
	            ->where('user_id', $id)
	            ->update(['image' => $image,'address'=>$address]);
    		 return redirect('/');
    		}else{
    			DB::table('patients')->insert(
                   [  'user_id' => $id ,'image'=>$image,'address' =>$address ]
                );
    		  return redirect('/');
    		}
    		 
    	}else{
    		return redirect('/');
    	}
    }
}
