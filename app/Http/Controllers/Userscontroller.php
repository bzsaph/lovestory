<?php

namespace App\Http\Controllers;

use App\Newstory;
use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function welcome(){
        $story = Newstory::all();
        return view('welcome',compact('story'));
    }
    //
}
