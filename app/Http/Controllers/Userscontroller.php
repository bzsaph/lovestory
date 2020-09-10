<?php

namespace App\Http\Controllers;

use App\Newstory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Userscontroller extends Controller
{
    public function welcome(){
        $story = Newstory::all();
        return view('welcome',compact('story'));
    }
    public function Readstory($id){
        $story= DB::table('newstories')->where('id', $id)->get();
        return view('Readstory',compact('story'));
    }

    //
}
