<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\register;
use App\Models\safety;
use Carbon\Carbon;
use \Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;

class usercontroller extends Controller
{

    public function searchapprovedrequest()
    {
        $name=request('searchname');
        
        if(!empty($name))
        {
        $data=form::where('name','like','%'.$name.'%')->where('empno','=',session('sid'))
        ->orwhere('agencyname','like','%'.$name.'%')->where('empno','=',session('sid'))
        ->orwhere('joblocation','like','%'.$name.'%')->where('empno','=',session('sid'))->latest()->Paginate(10);
        }
        else
        {
            $data=form::where('safetystatus','like','Approveds%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('empno','=',session('sid'))->latest()->Paginate(10);

        }
     
        return view('approvedreq',compact('data'));
    }


    public function getapprovedrequest()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
      
        $data=form::where('safetystatus','like','Approved%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('empno','=',session('sid'))->latest()->Paginate(10);
        
        return view('approvedreq',compact('data'));
    }

    public function searchreport()
    {
        $name=request('searchname');
        
        if(!empty($name))
        {
        $data=form::where('name','like','%'.$name.'%')->where('empno','=',session('sid'))
        ->orwhere('empno','like','%'.$name.'%')->where('empno','=',session('sid'))
        ->orwhere('agencyname','like','%'.$name.'%')->where('empno','=',session('sid'))
        ->orwhere('joblocation','like','%'.$name.'%')->where('empno','=',session('sid'))->latest()->Paginate(10);
        }
        else
        {
            $data=form::select('*')->where('securitystatus','like','%')->where('maintanancestatus','like','%')->where('safetystatus','like','%')->latest()->Paginate(10);

        }
     
        return view('status',compact('data'));
    }

    
    public function getreports()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
      
        $data=form::select('*')->where('securitystatus','like','%')->where('maintanancestatus','like','%')->where('safetystatus','like','%')->whereBetween('date', [$getdate1, $getdate2])->Paginate(10);
        
        return view('status',compact('data'));
    }

    public function updatepassword(Request $request)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

        $pid = request('empno');
        $newpass=request('NewPassword');
        $confirmpass=request('ConfirmPassword');
        

       if($newpass==$confirmpass)
      {
        $p1=md5($newpass);
        register::where('empno',$pid)->update(['password'=>$p1]);
       }
       else
       {
        echo "<script>alert('Password is not correct');window.location='/profile';</script>"; 

       }

       return redirect('/profile');
    
    }


    public function profile()
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();
        return view('profile',compact('LoggedUserInfo'));
    }

    public function statusview($id)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();
        $data=form::find($id);
        return view('statusview',compact('data','LoggedUserInfo'));
    }
  
    public function pdfdownload($id)
    {       
     
        $data=form::join('safeties','forms.id','safeties.pid')->select('forms.*','safeties.*')->find($id);

        $pdf=PDF::loadView('print',['data' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('requestform.pdf');
    
    }

    public function print($id)
    {
        $data=form::join('safeties','forms.id','safeties.pid')->select('forms.*','safeties.*')->find($id);

        return view('print',compact('data'));
    }


    public function showreqqq()
    {
        
        $data=form::where('empno','=',session('sid'))->latest()->Paginate(10);
        return view('status',compact('data'));
    }

    public function showreqq()
    {
        
        $data=form::where('safetystatus','like','Approved%')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('empno','=',session('sid'))->latest()->Paginate(10);
    
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
        $ulocation = request('eloc');
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
                $l->joblocation=$ulocation;
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
