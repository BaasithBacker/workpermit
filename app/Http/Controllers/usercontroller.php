<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\register;
use Carbon\Carbon;


class usercontroller extends Controller
{
    public function currentdate()
    {
     
    }

    public function showreqqq()
    {
        
        $data=form::where('empno','=',session('sid'))->Paginate(10);
        return view('status',compact('data'));
    }

    public function showreqq()
    {
        
        $data=form::where('safetystatus','=','approved')->where('securitystatus','=','approved')->where('maintanancestatus','=','approved')->where('empno','=',session('sid'))->Paginate(10);

        return view('approvedreq',compact('data'));
    }

    public function store(Request $request)
    {
       $now = Carbon::now();
     
        $uloc = request('location');
        $ujob=request('Jobtype');
        $checkstr=implode(',',$ujob);
        $uname=request('name');
        $udesig=request('Designation');
        $udept=request('Department');
        $uempno=request('empno');
        $ucontact=request('Contactno');
        $ufdate = request('fdate');
        $utdate = request('tdate');
        $uftime = request('ftime');
        $uttime = request('ttime');
        $ucname = request('cname');
        $usname = request('Sname');
        $ucno = request('cno');   
        $uno = request('no');
        $uinsurance = request('insurance');
        $uloc = request('eloc');
        $udesc = request('desc');
        $utool=request('tools');
        $checkstr1=implode(',',$utool);
        // echo $checkstr1;
        $uelec = request('electricity');
        
      
        
        
        $this->validate($request,[
          
            'location'=>'required',
            'Jobtype'=>'required',
            'name'=>'required',
            'Designation'=>'required',
            'Department'=>'required',
            'empno'=>'required',
            'fdate'=>'required',
            'tdate'=>'required',
            'ftime'=>'required',
            'ttime'=>'required',
            'cname'=>'required',
            'Sname'=>'required',
            'cno'=>'required',
            'no'=>'required',
            'insurance'=>'required',
            'eloc'=>'required',
            'desc'=>'required',
            'tools'=>'required',
            'electricity'=>'required',
        ]);


       
                $l = new form();

                $l->date=$now;
                $l->location=$uloc;
                $l->jobtypes=$checkstr;
                $l->name=$uname;
                $l->desig=$udesig;
                $l->dept=$udept;
                $l->empno=$uempno;
                $l->contactno=$ucontact;
                $l->fdate=$ufdate;
                $l->tdate=$utdate;
                $l->ftime=$uftime;
                $l->ttime=$uttime;
                $l->agencyname=$ucname;
                $l->supervisorname=$usname;
                $l->supervisorcontact=$ucno;
                $l->noofpersons=$uno; 
                $l->insurance=$uinsurance; 
                $l->joblocation=$uloc;
                $l->workdetails=$udesc;
                $l->equipmentsused=$checkstr1;
                $l->tempelectric=$uelec; 
                $l->securitystatus='waiting'; 
                $l->safetystatus='waiting'; 
                $l->maintanancestatus='waiting'; 
                               


                $l->save();
                echo "<script>alert('Submitted successfully');window.location='/Uhome';</script>"; 
                
            


        echo "added successfully";
    }

    public function viewuser()
    {   
        $now=Carbon::today()->format('d-m-Y');
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();
        return view('Uhome',compact('LoggedUserInfo','now'));
       
    }

   
        
}
