<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\User;
use App\Newstory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Userscontroller extends Controller
{
    public function welcome(){
        $story = Newstory::all();
        $alluser = User::all();
        $category =Category::all();
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

    //
}





