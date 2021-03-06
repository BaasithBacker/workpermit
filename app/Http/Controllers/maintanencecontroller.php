<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\safety;
use App\Models\form;
use App\Models\register;


class maintanencecontroller extends Controller
{
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
            $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->latest()->Paginate(10);

        }
     
        return view('maintanencereport',compact('data'));
    }



    public function viewreport()
    {
        
        $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->where('safetystatus','like','Approved%')->latest()->Paginate(10);
        
        return view('maintanencereport',compact('data'));
    }

    public function getreport()
    {
        $getdate1=request('date1');
        $getdate2=request('date2');
          
        $data=form::select('*')->where('securitystatus','like','Approved%')->where('maintanancestatus','like','Approved%')->whereBetween('date', [$getdate1, $getdate2])->latest()->Paginate(10);
        
        return view('maintanencereport',compact('data'));
    }

    public function rview($id)
    {
        $data=form::find($id);
        return view('maintanenceviewreport',compact('data'));
    }

    public function showreq()
    {

        $data=form::where('maintanancestatus','like','waiting')->where('securitystatus','like','Approved%')->latest()->Paginate(10);

        return view('maintenance',compact('data'));
    }
    public function showreq1($id)
    {

        $data=form::find($id);

        return view('Shome',compact('data'));
    }

    public function mapproved($id)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

        $data=form::find($id);

        $data->maintanancestatus='Approved by '.$LoggedUserInfo->name;

        $data->save();

       return redirect('/safety');
    
    }

    public function mrejected($id)
    {
        $data=form::find($id);

        $data->maintanancestatus='Rejected';

        $data->save();

       return redirect('/safety');
    
    }

    public function view($id)
    {
        $data=form::find($id);
        return view('maintenanceview',compact('data'));
    }


    public function store(Request $request)
    {
        $req = request('pid');
        $ufe = request('safety1');
        $ufhydrant = request('safety2');
        $uSignage=request('safety3');
        $uAppropriatePPE=request('safety4');
        $uGuardrails = request('safety5');
        $uMachineSafety = request('safety6');
        $uAdequateventilation = request('safety7');
        $uAdequateLighting = request('safety8');
        $uElectricalSafety = request('safety9');
        $ladder = request('safety10');
        $uFallProtection = request('safety11');
        $uIsolation = request('isolation');
        $uisolation1 = request('isolation1');
        $utool = request('tools');
        $checkstr = implode(',',$utool);
        //dd($utool);
        $uprecuation = request('prec');
        $uremarks = request('remarks');


        // echo $ufe;
        // echo $ufhydrant;
        // echo $uSignage;
        // echo $uAppropriatePPE;
        // echo $uGuardrails;
        // echo $uMachineSafety;
        // echo $uAdequateventilation;
        // echo $uAdequateLighting;
        // echo $uElectricalSafety;
        // echo $uFallProtection;
        // echo $uIsolation;
        // echo $uisolation1;
        // echo $uisolation1;
        // echo $checkstr1;
        // echo $uprecuation;
        // echo $uremarks;
        // echo $uStatus;


        
        $this->validate($request,[
            'safety1'=>'required',
            'safety2'=>'required',
            'safety3'=>'required',
            'safety4'=>'required',
            'safety5'=>'required',
            'safety6'=>'required',
            'safety7'=>'required',
            'safety8'=>'required',
            'safety9'=>'required',
            'safety10'=>'required',
            'safety11'=>'required',
            'isolation'=>'required',
            'tools'=>'required',
            'prec'=>'required',
             
        ]); 

        


                $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

                $l = new safety();

                $l->pid=$req;
                $l->FireExtinguisher=$ufe;
                $l->AccesstofireHydrant=$ufhydrant;
                $l->Signage=$uSignage;
                $l->AppropriatePPE=$uAppropriatePPE;
                $l->Guardrails=$uGuardrails;
                $l->MachineSafety=$uMachineSafety;
                $l->Adequateventilation=$uAdequateventilation;
                $l->AdequateLighting=$uAdequateLighting;
                $l->ElectricalSafety=$uElectricalSafety;
                $l->ladder=$ladder;
                $l->FallProtection=$uFallProtection;
                $l->Isolation=$uIsolation;
                $l->isolation1=$uisolation1;
                $l->trainingtalk=$checkstr;
                $l->precuation=$uprecuation;
                $l->remarks=$uremarks;
                $l->save();

                $data=form::find($req);

                $data->safetystatus='Approved by '.$LoggedUserInfo->name;
        
                $data->save();

                echo "<script>alert('Submitted successfully');window.location='/safety';</script>"; 

    }
    public function rejected(Request $request)
    {
        $LoggedUserInfo=register::where('empno','=', session('sid'))->first();

        $pid = request('pid');
        $reason=request('rejReason');

        $data=form::find($pid);

        $data->maintanancestatus='Rejected by '.$LoggedUserInfo->name.' - reason - '.$reason;
        $data->save();

       return redirect('/maintenance');
    
    }
}
