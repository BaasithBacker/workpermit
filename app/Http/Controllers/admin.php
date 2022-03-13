<?php

namespace App\Http\Controllers;
use App\Models\form;
use App\Models\register;
use Illuminate\Http\Request;

class admin extends Controller
{

    public function searchuser()
    {
       
        $name=request('searchname');
        if(!empty($name))
        {
        $data=register::where('name','like','%'.$name.'%')
        ->orwhere('deptname','like','%'.$name.'%')
        ->orwhere('empno','like','%'.$name.'%')
        ->orwhere('contact','like','%'.$name.'%')->latest()->Paginate(10);
        }
        else
        {
            $data=register::select('*')->latest()->Paginate(10);
        }

        
        return view('adminviewusers',compact('data'));
    }



    public function viewuser()
    {
        $data=register::select('*')->latest()->Paginate(10);

        return view('adminviewusers',compact('data'));
    }

    public function edituser($empno)
    {
        $data=register::select('*')->where('empno',$empno)->first();

        return view('adminedituser',compact('data'));

        
    }
    public function storeedituser(Request $request){
        $empno = $request->query('eid');
        
        $name = request('name');
        $contact = request('contact');
        $role = request('role');
        $deptname = request('deptname');

        register::where('empno',$empno)->update(['name'=>$name,'contact'=>$contact,'usertype'=>$role,'deptname'=>$deptname]);
        echo "<script>alert('updated successfully');window.location='/adminviewusers';</script>"; 
    }

    public function viewreport()
    {
       
          
        $data=form::where('safetystatus','like','Approved%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->latest()->Paginate(10);
        
        return view('adminreportsview',compact('data'));
    }

    public function getreport()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
        $name=request('searchname');
          
        $data=form::where('safetystatus','like','Approved%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->whereBetween('date', [$getdate1, $getdate2])->latest()->Paginate(10);
        
        return view('adminreportsview',compact('data'));
    }

    public function searchreport()
    {
       
        $name=request('searchname');
        
        if(!empty($name))
        {
        $data=form::where('name','like','%'.$name.'%')
        ->orwhere('empno','like','%'.$name.'%')
        ->orwhere('agencyname','like','%'.$name.'%')
        ->orwhere('joblocation','like','%'.$name.'%')->latest()->Paginate(10);
        }
        else
        {
            $data=form::where('safetystatus','like','Approved%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->latest()->Paginate(10);
        }

        
        return view('adminreportsview',compact('data'));
    }

    public function adminreportview($id)
    {
        $data=form::join('safeties','forms.id','safeties.pid')
        ->select('forms.*','safeties.*')->find($id);

        return view('adminviewreport',compact('data'));
    }
}
