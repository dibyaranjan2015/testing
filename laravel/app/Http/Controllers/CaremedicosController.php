<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Care_user;

class CaremedicosController extends Controller
{
    public function blog(){
       return view('blog');
    }

    public function test(){
   	   $users = Care_user::all();
   	   return view('test',compact('users'));
   	}

   	public function store(Request $request){
   		$datainput = $request->all();
   		if($datainput['password'] == ''){
   			return view('signup');
   		}else{
   			Care_user::create($datainput);
   		    return view('careindex');
   		}
   		
   	}
}
