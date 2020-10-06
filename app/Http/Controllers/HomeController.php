<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //is __construct() function ki waja se agar user loggedin nahi hai to yeh page nahi khulega 
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
        return view('index'); // login karne k bad yahan redirect hoga 
    }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('welcome');
    //   }
}
