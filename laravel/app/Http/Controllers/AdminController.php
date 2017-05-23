<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Blog;
use Session;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        if(Session::has('ad_name') && Session::has('ad_type'))
        {
          return redirect('admin/domain');
        }
        else
        {
          return view('admin/adminindex');  
        }
    }


    public function view(){
        if(Session::has('ad_name') && Session::get('ad_type')==1){
            return view('admin/member/signup');  
        }else{
            return redirect()->back();
        }
    }

    public function domain(){
        if(Session::has('ad_name') && Session::has('ad_type')){
            return view('admin/main_admin');
        }else{
            return redirect()->back();
        }

        
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
                return redirect('admin/domain');
              }
              if($ad_type==2){
                return redirect('admin/domain');
              }
              if($ad_type==3){
                return redirect('admin/domain');
              }
              if($ad_type==4){
                return redirect('admin/domain');
              }
              if($ad_type==5){
                return redirect('admin/domain');
              }

        }else{
            $error = "Username or password does not match";
            return view('admin/adminindex',['error'=>$error]);
        }
    }

    public function store(Request $request){
      if(Session::has('ad_name')&&Session::get('ad_type')==1)
        {
          $a_name = $request->input('admin_name');
          $a_pass = $request->input('admin_pass');
          $a_pass1 = $request->input('admin_pass1');
          $a_email = $request->input('admin_email');
          $a_type = $request->input('a_type');
          $hashpassword = md5(md5($a_pass));
          if($a_pass!=$a_pass1)
          {
            $error="Password does not match!!";
            return view('admin/member/signup',['error'=>$error]);
          }
          else
           {
             DB::table('members')->insert(
                 ['m_name'=>$a_name , 'm_email' => $a_email ,'m_password' =>$hashpassword , 'm_type'=>$a_type]
               );
             return redirect("/admin");
          }
        }
        else
        {
          return redirect('/admin');
        }

    }


    public function showmember(Request $request){
        if(Session::has('ad_name')&&Session::get('ad_type')==1)
        {
          $members = Member::paginate(10);
          return view('admin/member/view',compact('members'));
        }
        else
        {
          return redirect('/admin');
        }
    }
     public function editmember($m_id)
    {
        if((Session::has('ad_name'))&&(Session::get('ad_type')==1))
        {
          $member_per =  DB::table('members')->where('m_id', $m_id)->first();
          if($member_per){
              return view('admin/member/edit',['member_per'=>$member_per]);
          }else{
              return redirect('admin/domain/show_members');
          }
          
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function updatemember(Request $request)
    {
        if(Session::has('ad_name')&&(Session::get('ad_type')==1))
        {
          $m_type = $request->input('m_type');
          $id= $request->input('id');
          DB::table('members')
              ->where('m_id', $id)
              ->update(['m_type'=>$m_type]);
          return redirect('/admin/domain/show_members');
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function removemember($m_id)
    {
        if((Session::has('ad_name'))&&(Session::get('ad_type')==1))
        {
          $member_per =  DB::table('members')->where('m_id', $m_id)->first();
          if($member_per){
              DB::table('members')->where('m_id', $m_id)->delete();
              return redirect('admin/domain/show_members');
          }else{
              return redirect('admin/domain/show_members');
          }
          
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function createblog()
    {
        if(Session::has('ad_name'))
        {
          return view('admin/blog/create');
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function storeblog(Request $request)
    {
        if(Session::has('ad_name'))
        {
          $name = Session::get('ad_name');
          $subject = $request->input('title');
          $message = $request->input('content');


          $blog = new Blog;
          $blog->name = $name;
          $blog->subject = $subject;
          $blog->message = $message;
          $blog->save();
          return redirect('/admin');
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function updateblog(Request $request)
    {
        if(Session::has('ad_name'))
        {
          $subject = $request->input('title');
          $message = $request->input('content');
          $id= $request->input('id');
          DB::table('blogs')
              ->where('id', $id)
              ->update(['subject'=>$subject,'message'=>$message]);
          return redirect('/admin/blog/view');
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function viewblog()
    {
        if((Session::has('ad_name'))&&(Session::get('ad_type')==1))
        {
          $blogs = Blog::paginate(10);
          return view('admin/blog/view',compact('blogs'));
        }
        else
        {
          return redirect('/admin');
        }
    }
    public function editblog($id)
    {
        if((Session::has('ad_name'))&&(Session::get('ad_type')==1))
        {
          $blog_per =  DB::table('blogs')->where('id', $id)->first();
          if($blog_per){
              return view('admin/blog/edit',['blog_per'=>$blog_per]);
          }else{
              return redirect('admin/blog/view');
          }
          
        }
        else
        {
          return redirect('/admin');
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