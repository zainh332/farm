<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmhouseController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('admin', function () {
//     return view('admin');
// });


// Route::get('farmhouse', function () {
//     return view('farmhouse');
// });

//Route::resource('farmfilter', 'FarmhouseController@farmfilter');
//Route::get('rooms/{id}', [FarmhouseController::class, 'farmfilter']);// issie bhi ho raha hai kaam lekn isse bad main check kareinge

//Route::put('farmfilter', 'FarmhouseController@farmfilter'); // error ata hai get method is not supported for this route
//Route::get('farmfilter', 'FarmhouseController')->name('farmfilter');

// Route::get('/', function () {
//     return view('home');
// });
//Route::view('farmadmin', 'dashboard.farmadmin');

Route::view('/', 'index');
Route::view('welcome', 'welcome');
Route::view('about-us', 'aboutus');
Route::resource('farmhouse', 'FarmhouseController');
Route::resource('image', 'imageController');
Route::resource('phone', 'phoneController');
Route::resource('booking', 'bookingController');
// Route::resource('farmadmin', 'Auth\LoginController@authenticated');


//Route::view('farmadmin', 'dashboard.farmadmin');
// Route::prefix('admin')->middleware('auth')->group(function(){
//     Route::resource('/', 'farmadminController');
// });

Route::get('farmfilter', [FarmhouseController::class, 'farmfilter']);



Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('admin', 'Auth\LoginController@authenticated');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');// yeh name jo bhi hai wo us page ka title hojaega 



Route::prefix('/')->middleware('adminauth')->group(function(){
     Route::get('admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
     Route::get('users', [App\Http\Controllers\adminController::class, 'viewusers'])->name('users');
     Route::get('adduser', [App\Http\Controllers\adminController::class, 'addusers'])->name('adduser');
     Route::any('insertuser','admincontroller@insertuser')->name('insertuser');
});



