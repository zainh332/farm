<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

   
   //protected $redirectTo = RouteServiceProvider::HOME;     // yeh home controller hai
   //protected $redirectTo = RouteServiceProvider::ADMIN;
   

//    public function authenticated()
//     {
//        // if( Auth::user()->hasRole($role) )
       
//     if(Auth::user()->role->id == 1)
//     {
//         //return "asdasdasdasdasd";
//         //return view('dashboard.admin'); isse nahi hoga q k csrf ka masla araha hai
//         //return app('App\Http\Controllers\adminController')->index(); isse bhi nahi ho raha csrf ka masla raha hai
//         return redirect()->route('admin');// admin route ka name hai jo bataya hua hai web.php main 
        
        
//     } 
//     elseif (Auth::user()->role->id == 2)//yeh farmadmin hai
//     {
//         return redirect('dashboard.farmadmin');
//     } 

//     return redirect('/');
//     }

public function redirectTo() //yeh function khud redirect hai to hum reutrn main redirect call nahi kara sakte
{
   
    if(Auth::user()->role->id == 1)
        {
            //return "asdasdasdasdasd";
            //return view('dashboard.admin'); isse nahi hoga q k csrf ka masla araha hai
            //return app('App\Http\Controllers\adminController')->index(); isse bhi nahi ho raha csrf ka masla raha hai
            return route('admin');// admin route ka name hai jo bataya hua hai web.php main 
            
            
        } 
        elseif (Auth::user()->role->id == 2)//yeh farmadmin hai
        {
            return ('dashboard.farmadmin');
        } 
    
        return ('/');
    }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout()
     {
         Auth::logout();
         return redirect('login');
     }
}
