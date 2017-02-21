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

    		
            $mob = $request->input('mob');
            $gender = $request->input('gender');
            $country = $request->input('country');
            $state = $request->input('state');
            $district = $request->input('district');
            $city = $request->input('city');
    		$str_address = ($request->input('str_address')).($request->input('landmark'));
            $blood = ($request->input('bloodgroup')).($request->input('rhesusfactor'));
            $im = $request->input('identificationmarks');

             if($request->hasFile('image')){
                $image = $request->file('image');
                $img_name = $image->getClientOriginalName();

                $image->move(public_path().'/uploads/', $img_name);
            }else{
                //default image name
                $img_name = 'default';
            }

    		$unique_user = DB::table('patients')->where('user_id',$id)->first();
    		if($unique_user){
    			DB::table('patients')
	            ->where('user_id', $id)
	            ->update(['image' => $img_name,'gender'=>$gender,'country'=>$country,'state'=>$state,'district'=>$district,'city'=>$city,'str_address'=>$str_address,'blood_group'=>$blood,'identification_mark'=>$im]);
                DB::table('care_users')
                ->where('id', $id)
                ->update(['mob' => $mob]);
    		 return redirect('/');

    		}else{
    			DB::table('patients')->insert(
                   [  'user_id' => $id ,'image' => $img_name,'gender'=>$gender,'country'=>$country,'state'=>$state,'district'=>$district,'city'=>$city,'str_address'=>$str_address,'blood_group'=>$blood,'identification_mark'=>$im]
                );
                DB::table('care_users')
                ->where('id', $id)
                ->update(['mob' => $mob]);
    		  return redirect('/');
    		}
    		 
    	}else{
    		return redirect('/');
    	}
    }

    public function show(){
        if(Session::has('name')&& Session::has('id')) {
            $name =  Session::get('name');
            $id =  Session::get('id');
            $user = DB::table('patients')->where('user_id',$id)->first();
            $image_name = "asset('/uploads/".$user->image."')";
          
            return view('patient_prof.home',['user'=>$user,'name'=>$name,'image_name'=>$image_name]);
        }

    }
}
