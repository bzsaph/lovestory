<?php

namespace App\Http\Controllers;

use App\Category;
use App\Newstory;
use App\User as AppUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;


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
        $submitestory->user_id=Auth::user()->id;
        $submitestory->Title=$request->titleofthestory;
        $submitestory->Description=$request->newstory;
        $submitestory->Category=$request->category;
        $submitestory->save();
        Session::flash('message', "posted successfull");
        return Redirect::back();

    }
    public function mc($phone,$message)
    {
        $message = urlencode(urldecode($message));
        $names="M-Clearance";
        $urlsms="http://mc.gov.rw:8778/cgi-bin/sendsms?smsc=mtn&username=sms&password=sms&to=25$phone&text=$message&from=$names";

        try{
            $response = file_get_contents($urlsms);

        }catch(\Throwable $e){


            Log::error("SMS can not be sent to $phone $message");
        }
        return response("saved success full")->header('Content-Type', 'text/plain');
    }

    public function fines($phone,$message,$names)
    {
        $message = urlencode(urldecode($message));

        if (!empty($phone)||!empty($messages)||!empty($names) ) {

            $smsfines="http://197.243.109.238:13013/cgi-bin/sendsms?username=sms&password=sms&smsc=airtel&from=$names&to=25$phone&text=$message";

            try{
                $response = file_get_contents($smsfines);





            }catch(\Throwable $e){

                Log::error("SMS can not be sent to $phone $message");
            }
            return response("saved success full")->header('Content-Type', 'text/plain');
        }else{

        // $urlsms="http://mc.gov.rw:8778/cgi-bin/sendsms?smsc=mtn&username=sms&password=sms&to=25$phone&text=$message&from=$names";
        return response("not sented")->header('Content-Type', 'text/plain');

         }
    }
    public function newrole()
    {
        return view('admin.role');
    }
    public function setting()
    {
        $role =Role::all();
        $permissions=Permission::all();

        return view('admin.setting',compact('role','permissions'));
    }
    public function postpermission(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:permissions', 'max:255'],

        ]);
        $category =new Permission();
        $category->name=$request->name;
        $category->save();
        Session::flash('message', "Permission created successfull");
        return Redirect::back();
    }
    public function postrole(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:roles', 'max:255'],

        ]);
        $category =new Role();
            $category->name=$request->name;
            $category->save();
            Session::flash('message', "Role created successfull");
            return Redirect::back();
    }
public function viewstory()
{
    $story = Newstory::all();
    return view('admin.viewsalltory',compact('story'));
}
public function newuser()
{
    $roles =Role::all();


    return view('admin.createnewuser',compact('roles'));
}
public function alluser()
{
   $user =User::all();
   return view('admin.user',compact('user'));
}
public function storenewuser(Request $request)
{
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
    ]);
    $user =User::create($request->except('_token','roles'));
    $user->assignRole($request->roles);

    Session::flash('message', "User created successfull");
    return Redirect::back();
}
public function edituser($id)
{
    $roles =Role::all();


    $user =User::find($id);
    $roless = $user->roles;

    return view('admin.form.edituser',compact('roles','user','roless'));
}
public function updateuser(Request $request)
{
    $user =User::find($request->id);
    $resurt=$user ->hasAnyRole(Role::all());
    if($resurt == true){
        $user->syncRoles([]);
        $user->assignRole($request->roles);
        Session::flash('message', "User created successfull");
        return Redirect::back();
    }else{

        $user->assignRole($request->roles);
        Session::flash('message', "User created successfull");
        return Redirect::back();
    }

}
public function roleupdate(Request $request,$id)
{
    $role=Role::findById($id);
    $resurt= $role->hasPermissionTo($role);
    if($resurt == true){
        $role->syncPermissions($role);
        $role->givePermissionTo([$request->permissions]);
        Session::flash('message', "User created successfull");
        return Redirect::back();
    }else{

        $role->givePermissionTo([$request->permissions]);
        Session::flash('message', "User created successfull");
        return Redirect::back();
    }

}

}
