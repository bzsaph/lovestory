<?php

namespace App\Http\Controllers;

use App\Category;
use App\Newstory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function Createstory(){
        $category =Category::all();
        return view('admin.Createstory',compact('category'));
    }
    public function submitstoror(Request $request){
        $submitestory = new Newstory();
        $submitestory->Use_id=Auth::user()->id;
        $submitestory->Title=$request->titleofthestory;
        $submitestory->Description=$request->newstory;
        $submitestory->Category=$request->category;
        $submitestory->save();
        Session::flash('message', "posted successfull");
        return Redirect::back();

    }


}
