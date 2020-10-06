<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class admincontroller extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');// iski waja se direct admin ka page nahi khulega 
    // }//iski zarorat nahi route main direct adminauth middleware ko call karadia hai 

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {//$bla = User::where('id', '=', auth()->id())->get();
      return view('dashboard.admin');
        //return "asdasdasdasd";
    }

    public function viewusers()
    {
      $viewuserss = User::all();
      return view('dashboard.viewusers',compact('viewuserss'));
    }

    public function addusers()
    {
      // $viewuserss = User::all();
      // return view('dashboard.viewusers',compact('viewuserss'));
      return view('dashboard.adduser');


    }

    public function insertuser(Request $ac)
    {
      // $viewuserss = User::all();
      // return view('dashboard.viewusers',compact('viewuserss'));
      //return view('dashboard.adduser');
      // $user = User::select('name')->where('id', 1)->get();

      $user = User::all();
      $rolename = 0;
      //$aa = $user::Where('id')->first()->get();

      $user = new User();
      $user->name = $ac->name;
      $user->email = $ac->email;
      $user->password = $ac->password;
      $user->role_id =$ac->role;
      $save = $user->save();
      if($save){
        return view('dashboard.viewusers', compact('user'));
      }
      // $user =  User::select('name')->where('role_id', 1)->get();

//return $rolename;



     // return $user;


    }
}
