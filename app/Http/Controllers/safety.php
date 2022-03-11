<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\register;

class safety extends Controller
{
    public function searchreport()
    {
        $name=request('searchname');
        
        if(!empty($name))
        {
        $data=form::where('name','like','%'.$name.'%')
        ->orwhere('empno','like','%'.$name.'%')
        ->orwhere('agencyname','like','%'.$name.'%')
        ->orwhere('joblocation','like','%'.$name.'%')->Paginate(10);
        }
        else
        {
            $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('safetystatus','like','Approved%')->Paginate(10);

        }
     
        return view('safetyreport',compact('data'));
    }

    public function viewreport()
    {

        $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('safetystatus','like','Approved%')->Paginate(10);
    
        return view('safetyreport',compact('data'));
    }
    public function getreport()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
          
        $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('safetystatus','like','Approved%')->whereBetween('date', [$getdate1, $getdate2])->Paginate(10);
        
        return view('safetyreport',compact('data'));
    }

    public function rview($id)
    {
        $data=form::join('safeties','forms.id','safeties.pid')
        ->select('forms.*','safeties.*')->find($id);
      

        return view('safetyreportview',compact('data'));
    }

    public function showreq()
    {

        $data=form::where('securitystatus','like','approved%')->where('maintanancestatus','like','approved%')->where('safetystatus','=','waiting')->get();

        return view('safety',compact('data'));
    }

    public function sapproved($id)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

        $data=form::find($id);

        $data->maintanancestatus='Approved by '.$LoggedUserInfo->name;

        $data->save();

       return redirect('/maintenance');
    
    }

   
    public function rejected(Request $request)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

        $pid = request('pid');
        $reason=request('rejReason');

        $data=form::find($pid);

        $data->safetystatus='Rejected by '.$LoggedUserInfo->name.' - reason - '.$reason;

        $data->save();

       return redirect('/safety');
    
    }

   

    public function view($id)
    {
        $data=form::find($id);
        return view('safetyview',compact('data'));
    }
}
