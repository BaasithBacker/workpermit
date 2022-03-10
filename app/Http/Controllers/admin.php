<?php

namespace App\Http\Controllers;
use App\Models\form;
use App\Models\register;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function viewuser()
    {
        $data=register::select('*')->Paginate(10);

        return view('adminviewusers',compact('data'));
    }

    public function edituser($empno)
    {
        $data=register::select('*')->where('empno',$empno)->first();
        //dd($data);

        return view('adminedituser',compact('data'));

        
    }
    public function storeedituser(Request $request){
        $empno = $request->query('eid');
        
        $name = request('name');
        $contact = request('contact');
        $deptname = request('deptname');

        register::where('empno',$empno)->update(['name'=>$name,'contact'=>$contact,'deptname'=>$deptname]);
        echo "<script>alert('updated successfully');window.location='/adminviewusers';</script>"; 


    }
}
