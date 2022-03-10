<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\form;


class loginactivity extends Controller
{
    public function check(Request $request)
    {
        $uempno=request('empno');
        $upass=request('password');
      
        
        $p1=md5($upass);
        $this->validate($request,[
            'empno'=>'required',
            'password'=>'required|min:5|max:15'
        ]);



        $u=register::select('empno')->where('empno','like',"$uempno")->first();
        
        if(!$u)
        {
            echo "<script>alert('No Matching EMployee Number Found,Invalid User');window.location='/';</script>";
        }
        else
        {
        //echo $u->mailid;
        $p=register::select('password')->where('empno','like',"$u->empno")->first();
        //echo $p->password;
        
        
            if($p->password == $p1)
            {
               
                $ut=register::select('usertype')->where('empno','like',"$u->empno")->first();
                $request->session()->put('utype',$ut);
                $i=register::select('name','empno')->where('empno','like',"$uempno")->first();
                $request->session()->put('sid',$i->empno);
                //echo $ut->usertype;
                if($ut->usertype == 'Staff')
                {
                   
                 echo "<script>alert('Successfully Logined,Welcome');window.location='/Uhome';</script>"; 
                }
                else if($ut->usertype=='Admin')
                {
                    $request->session()->put('sname','admin');
                     echo "<script>alert('Successfully Logined,Welcome');window.location='/Ahome';</script>";

                
                }
                else if($ut->usertype=='Maintenance Department')
                {
                   echo "<script>alert('Successfully Logined,Welcome');window.location='/maintenance';</script>"; 

                
                }
                else if($ut->usertype=='Security Department')
                {
                    echo "<script>alert('Successfully Logined,Welcome');window.location='/security';</script>"; 
                    
                
                }
                else if($ut->usertype=='Safety Department')
                {
                    echo "<script>alert('Successfully Logined,Welcome');window.location='/safety';</script>"; 
                    
                
                }
    
             }
             else
            {
                echo "<script>alert('Something went Wrong,Invalid User');window.location='/';</script>";
            }
        }
    }
    
    public function store(Request $request)
    {
        $uname = request('name');
        $uemail = request('contact');
        $udeptname = request('deptname');
        $uempno = request('empno');
        $role = request('role');
        $upass = request('password');
        $ucpass = request('confirmpassword');
        
        
        $this->validate($request,[
            'name'=>'required',
            'contact'=>'required',
            'deptname'=>'required',
            'empno'=>'required',
            'role'=>'required',
            'password'=>'required|min:5|max:15',
            'confirmpassword'=>'required|min:5|max:15']);


            if($upass == $ucpass)
            {
                $p1=md5($upass);          

                $l = new register();

                $l->name=$uname;
                $l->contact=$uemail;
                $l->deptname=$udeptname;
                $l->empno=$uempno;
                $l->password=$p1;
                $l->usertype=$role;

                $l->save();
                
                echo "<script>alert('Signup Successfull');window.location='/';</script>"; 
                }
                 else
                 {
                echo "<script>alert('Password is not correct');window.location='/Register';</script>"; 
                }


        // echo "added successfully";
        

    }
}
