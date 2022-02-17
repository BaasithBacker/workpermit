<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginactivity;
use App\Http\Controllers\maintanencecontroller;
use App\Http\Controllers\safety;
use App\Http\Controllers\security;
use App\Http\Controllers\usercontroller;
use Carbon\Carbon;
use Dompdf\Dompdf;




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

Route::get('/', function () {
    return view('login');
});

Route::get('test', function () {
  
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Uhome', function () {
    return view('Uhome');
});

Route::get('/securityform', function () {
    return view('securityform');
});


// Route::get('/Shome', function () {
//     return view('Shome');
// });

// Route::get('/Shome/{id}', function () {
//     return view('Shome');
// });

Route::post('/Register1',[loginactivity::class,'store']);

Route::post('/Login1',[loginactivity::class,'check']);

Route::post('/Uhome1',[usercontroller::class,'store']);
Route::post('/securityform1',[security::class,'store']);

Route::post('/Shome1',[maintanencecontroller::class,'store']);

Route::get('/security',[security::class,'showreq']);

Route::get('/Uhome',[usercontroller::class,'viewuser']);
Route::get('/securityform',[security::class,'viewuser']);

Route::get('/approvedreq',[usercontroller::class,'showreqq']);
Route::get('/securityapproved',[security::class,'showreqq']);

Route::get('/status',[usercontroller::class,'showreqqq']);
Route::get('/securitystatus',[security::class,'showreqqq']);

Route::get('/safety',[safety::class,'showreq']);

Route::get('/maintenance',[maintanencecontroller::class,'showreq']);
Route::get('/Shome/{id}',[maintanencecontroller::class,'showreq1']);

Route::get('/approved/{id}',[security::class,'approved']); 
Route::post('/rejectedreq',[security::class,'rejected']); 

Route::get('/sapproved/{id}',[safety::class,'sapproved']); 
Route::get('/srejected/{id}',[safety::class,'srejected']); 

// Route::get('/Shome/{id}',[maintanencecontroller::class,'store']); 

Route::get('/mrejected/{id}',[maintanencecontroller::class,'mrejected']);

Route::get('/view/{id}',[security::class,'view']); 

Route::get('/sview/{id}',[safety::class,'view']); 
Route::get('/printview/{id}',[usercontroller::class,'print']);

Route::get('/mview/{id}',[maintanencecontroller::class,'view']); 

Route::get('/sessiondelete',function(){
    if(session()->has('sid'))
    {
        session()->pull('sid');
    }
    return view('login');
});




