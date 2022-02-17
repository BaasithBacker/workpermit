<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class safety extends Controller
{
    public function showreq()
    {

        $data=form::where('safetystatus','=','waiting')->where('securitystatus','=','approved')->get();

        return view('safety',compact('data'));
    }

    public function sapproved($id)
    {
        $data=form::find($id);

        $data->safetystatus='Approved';

        $data->save();

       return redirect('/safety');
    
    }

    public function srejected($id)
    {
        $data=form::find($id);

        $data->safetystatus='Rejected';

        $data->save();

       return redirect('/safety');
    
    }

    public function view($id)
    {
        $data=form::find($id);
        return view('safetyview',compact('data'));
    }
}
