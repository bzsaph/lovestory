<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\User;
use App\Newstory;
use App\suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Userscontroller extends Controller
{
    public function welcome(){
        $story=DB::table('newstories')->where('Delete','0')->get();
        $alluser = User::all();
        $category =Category::all();
        foreach ($category as $key => $value) {
            $sector = $value->id;
            $data=DB::table('newstories')->where('Category', $sector)->get();

            $category[$key]['newstories'] =$data;
            # code...
        }
        // dd($category);
        return view('welcome',compact('story','alluser','category'));

    }
    public function Readstory($id){
        $story= DB::table('newstories')->where('id', $id)->get();
        $comment= DB::table('comments')->where('Story_id', $id)->get();
        return view('Readstory',compact('story','comment'));
    }
    public function Comenttostory(Request $request){
        $comment =new Comment();
        $comment->usename=$request->post_firstname;
        $comment->email=$request->post_email;
        $comment->Story_id=$request->post_id;
        $comment->coment=$request->post_comment;
        $comment->save();
        Session::flash('message', "Comment accepted success full");
        return Redirect::back();
    }
    public function Previous($id){
        $story= Newstory::find($id);
        $prev = DB::table('newstories')->where([['id', '<', $id],['Category','=', $story->Category]])->orderBy('id','desc')->first();
        if(!$prev){
            $prev = DB::table('newstories')->orderBy('id','desc')->first();
            return redirect()->back();
        }
        return Redirect::to('Read/'.$prev ->id);
    }
    public function Next($id){
        $story= Newstory::find($id);
        $next = DB::table('newstories')->where([['id', '>', $id],['Category','=', $story->Category]])->orderBy('id','asc')->first();
        if(!$next){
            $next = DB::table('newstories')->orderBy('id','asc')->first();
            return redirect()->back();
        }else{
            return Redirect::to('Read/'.$next->id);
        }
    }
    public function createcategory()
        {
            $category =Category::all();
        return view('admin.category',compact('category'));
        }
    public function postcategory(Request $request){
            $category =new Category();
            $category->name=$request->name;
            $category->status="1";
            $category->save();
        return redirect()->back();
    }
    public function suggestion(Request $request)
    {
       $contactus =new suggestion();
       $contactus->name =$request->name;
       $contactus->email =$request->email;
       $contactus->message =$request->message;
       $contactus->save();
       return redirect('/')->with('status', 'message sented success full');

    }
    public function still()
    {
       return view('still');
    }
    public function Messages()
    {
        $message = suggestion::all();
       return view('admin.commentmessage',compact('message'));
    }


}





