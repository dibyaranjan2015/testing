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
            $user1 = DB::table('patients')->where('user_id', $id)->first();
            if($user1==null)
                return view('patient_prof.index',['user'=>$user]);
            else
                return redirect('/profile/show');
    	}else{
    		 return redirect('/');
    	}
    }

    public function store(Request $request){
    	if(Session::has('name')&& Session::has('id')) {
    		$name=Session::get('name');
    		$id = Session::get('id');
    		$user = DB::table('care_users')->where('username',$name)->where('id', $id)->first();

    		 $this->validate($request, [
                'gender' =>'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1040',
                'zipcode' =>'required',
                'country' =>'required',
                'state'=>'required',
                'district'=>'required',
                'city'=>'required',
                'age'=>'required'
             ]);
            $age = $request->input('age');
            $mob = $request->input('mob');
            $gender = $request->input('gender');
            $country = $request->input('country');
            $state = $request->input('state');
            $district = $request->input('district');
            $city = $request->input('city');
    		$str_address = ($request->input('str_address')).($request->input('landmark'));
            $blood = ($request->input('bloodgroup')).($request->input('rhesusfactor'));
            $im = $request->input('identificationmarks');
            $zipcode = $request->input('zipcode');
            
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img_name = $image->getClientOriginalName();

                $image->move(public_path().'/uploads/', $img_name);

            }else{
                //default image name
                $img_name = 'default.jpg';
            }

    		$unique_user = DB::table('patients')->where('user_id',$id)->first();
    		if($unique_user){
    			DB::table('patients')
	            ->where('user_id', $id)
	            ->update(['image' => $img_name,'gender'=>$gender,'country'=>$country,'state'=>$state,'district'=>$district,'city'=>$city,'str_address'=>$str_address,'age'=>$age,'zipcode'=>$zipcode,'blood_group'=>$blood,'identification_mark'=>$im]);
                DB::table('care_users')
                ->where('id', $id)
                ->update(['mob' => $mob]);
    		 return redirect('/');

    		}else{
    			DB::table('patients')->insert(
                   [  'user_id' => $id ,'image' => $img_name,'gender'=>$gender,'country'=>$country,'state'=>$state,'district'=>$district,'city'=>$city,'str_address'=>$str_address,'age'=>$age,'zipcode'=>$zipcode,'blood_group'=>$blood,'identification_mark'=>$im]
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
            $user1 = DB::table('care_users')->where('id',$id)->first();
            $image_name = "asset('/uploads/".$user->image."')";
          
            return view('patient_prof.home',['user'=>$user,'name'=>$name,'image_name'=>$image_name,'user1'=>$user1]);
        }

    }
}
