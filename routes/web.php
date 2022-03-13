<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginactivity;
use App\Http\Controllers\maintanencecontroller;
use App\Http\Controllers\safety;
use App\Http\Controllers\security;
use App\Http\Controllers\admin;
use App\Http\Controllers\usercontroller;
use Carbon\Carbon;
use DomPDF\DomPDF;




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

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Ahome', function () {
    return view('Ahome');
});

Route::get('/adminedituser', function () {
    return view('adminedituser');
});


Route::post('/Register1', [loginactivity::class, 'store']);
Route::post('/RegisterEdit', [admin::class, 'storeedituser']);


Route::post('/Login1', [loginactivity::class, 'check']);

Route::get('/sessiondelete', function () {
    if (session()->has('sid')) {
        session()->pull('sid');
    }
    return view('login');
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



Route::post('/Uhome1', [usercontroller::class, 'store']);
Route::post('/securityform1', [security::class, 'store']);

Route::post('/Shome1', [maintanencecontroller::class, 'store']);

Route::get('/security', [security::class, 'showreq']);

Route::get('/Uhome', [usercontroller::class, 'viewuser']);
Route::get('/securityform', [security::class, 'viewuser']);



Route::get('/approvedreq', [usercontroller::class, 'showreqq']);

Route::post('/approvedreq', [usercontroller::class, 'getapprovedrequest']);
Route::post('/approvedreq1', [usercontroller::class, 'searchapprovedrequest']);

Route::get('/securityapproved', [security::class, 'showreqq']);

Route::Post('/status', [usercontroller::class, 'getreports']);
Route::Post('/status1', [usercontroller::class, 'searchreport']);


Route::get('/status', [usercontroller::class, 'showreqqq']);
Route::get('/securitystatus', [security::class, 'showreqqq']);

//Route::get('/safety',[safety::class,'showreq']);

Route::get('/maintenance', [maintanencecontroller::class, 'showreq']);


Route::get('/safety', [safety::class, 'showreq']);
Route::get('/Shome/{id}', [maintanencecontroller::class, 'showreq1']);

Route::get('/approved/{id}', [security::class, 'approved']);
Route::post('/rejectedreq', [security::class, 'rejected']);
Route::post('/rejectedreqq', [maintanencecontroller::class, 'rejected']);
Route::post('/rejectedreqqq', [safety::class, 'rejected']);

Route::get('/sapproved/{id}', [safety::class, 'sapproved']);

// Route::get('/Shome/{id}',[maintanencecontroller::class,'store']); 

Route::get('/mrejected/{id}', [maintanencecontroller::class, 'mrejected']);

Route::get('/view/{id}', [security::class, 'view']);
Route::get('/statusview/{id}', [usercontroller::class, 'statusview']);
Route::get('/rview/{id}', [security::class, 'rview']);
Route::get('/rview/{id}', [maintanencecontroller::class, 'rview']);
Route::get('/rview/{id}', [safety::class, 'rview']);

Route::post('/safetyreport', [safety::class, 'getreport']);
Route::post('/safetyreport1', [safety::class, 'searchreport']);

Route::get('/securityreport', [security::class, 'viewreport']);

Route::get('/arview/{id}', [admin::class, 'adminreportview']);

Route::get('/sview/{id}', [maintanencecontroller::class, 'view']);
Route::get('/printview/{id}', [usercontroller::class, 'print']);

Route::get('/mview/{id}', [safety::class, 'view']);
Route::get('/medit/{id}', [admin::class, 'edituser']);

Route::get('/htmlPdf/{id}', [usercontroller::class, 'pdfDownload']);

route::Post('/securityreport', [security::class, 'getreport']);
route::Post('/securityreport1', [security::class, 'searchreport']);

route::get('/maintanencereport', [maintanencecontroller::class, 'viewreport']);

route::post('/maintanencereport', [maintanencecontroller::class, 'getreport']);
route::post('/maintanencereport1', [maintanencecontroller::class, 'searchreport']);

route::get('/safetyreport', [safety::class, 'viewreport']);

route::post('/adminreportsview', [admin::class, 'getreport']);
route::post('/adminreportsview1', [admin::class, 'searchreport']);

route::get('/adminreportsview', [admin::class, 'viewreport']);

route::get('/profile', [usercontroller::class, 'profile']);

Route::post('/updatepassword', [usercontroller::class, 'updatepassword']);

Route::Post('/adminviewusers', [admin::class, 'searchuser']);

Route::get('/adminviewusers', [admin::class, 'viewuser']);
