<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class safety extends Controller
{

    public function getreport()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
          
        $data=form::select('*')->where('securitystatus','=','approved')->where('maintanancestatus','=','approved')->where('safetystatus','=','approved')->whereBetween('date', [$getdate1, $getdate2])->Paginate(10);
        
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

        $data=form::where('securitystatus','=','approved')->where('maintanancestatus','=','approved')->where('safetystatus','=','waiting')->get();

        return view('safety',compact('data'));
    }

    public function sapproved($id)
    {
        $data=form::find($id);

        $data->maintanancestatus='Approved';

        $data->save();

       return redirect('/maintenance');
    
    }

   
    public function rejected(Request $request)
    {
        $pid = request('pid');
        $reason=request('rejReason');

        $data=form::find($pid);

        $data->safetystatus='Rejected-'.$reason;

        $data->save();

       return redirect('/safety');
    
    }

   

    public function view($id)
    {
        $data=form::find($id);
        return view('safetyview',compact('data'));
    }
}
