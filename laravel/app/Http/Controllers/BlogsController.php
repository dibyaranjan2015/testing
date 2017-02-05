<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Session;

class BlogsController extends Controller
{
   
    public function blog(){

        $blogs = DB::table('blogs')->get();

       return view('blogtemp',['blogs'=>$blogs]);
    }

    public function index()
    {
      return view('createblog');
    }

   
    public function store(Request $request)
    {
        $name = Session::get('name');
        $subject = $request->input('subject');
        $message = $request->input('message');


        $blog = new Blog;
        $blog->name = $name;
        $blog->subject = $subject;
        $blog->message = $message;
        $blog->save();
        return view('userpage');
        
    }


}
