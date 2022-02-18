<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maintenance;
use App\Models\form;


class maintanencecontroller extends Controller
{



    public function showreq()
    {

        $data=form::where('maintanancestatus','=','waiting')->where('securitystatus','=','approved')->get();

        return view('maintenance',compact('data'));
    }
    public function showreq1($id)
    {

        $data=form::find($id);

        return view('Shome',compact('data'));
    }

    public function mapproved($id)
    {
        
        
        $data=form::find($id);

        $data->maintanancestatus='Approved';

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
        $uFallProtection = request('safety10');
        $uIsolation = request('isolation');
        $uisolation1 = request('isolation1');
        $utool = request('tools');
        $checkstr = implode(',',$utool);
        $uprecuation = request('prec');
        // echo $checkstr;
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
            'isolation'=>'required',
            'isolation1'=>'required',
            'tools'=>'required',
            'prec'=>'required',
            'remarks'=>'required',  
        ]); 

        


       
                $l = new maintenance();

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
                $l->FallProtection=$uFallProtection;
                $l->Isolation=$uIsolation;
                $l->isolation1=$uisolation1;
                $l->trainingtalk=$checkstr;
                $l->precuation=$uprecuation;
                $l->remarks=$uremarks;
                $l->save();

                $data=form::find($req);

                $data->safetystatus='Approved';
        
                $data->save();

                echo "<script>alert('Submitted successfully');window.location='/safety';</script>"; 

    }
    public function rejected(Request $request)
    {
        $pid = request('pid');
        $reason=request('rejReason');

        $data=form::find($pid);

        $data->maintanancestatus='Rejected-'.$reason;

        $data->save();

       return redirect('/maintenance');
    
    }
}
