<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Session;

class BlogsController extends Controller
{
   
    public function blog(){

        $blogs = Blog::paginate(10);
         

       return view('blog.blog',compact('blogs'));
    }

    public function index()
    {
      return view('blog.createblog');
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
        return redirect('/userpage/'.$name);
        
    }

    public function blogshow($id){
        $blog_per =  DB::table('blogs')->where('id', $id)->first();
        return view('blog.blogsingle',['blog_per'=>$blog_per]);
    }


}
