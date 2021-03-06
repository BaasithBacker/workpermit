@extends('theme3')

@section('content')
<style>
    
::before,
::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: Mukta, sans-serif;
 
  justify-content: center;
  align-items: center;

  font-size: 0.8rem;

}
table {
  border-collapse: collapse;
  box-shadow: 0 5px 10px #e1e5ee;
  background-color: white;
  text-align: left;
  overflow: hidden;}

  td {
    padding: 1rem 2rem;
  }
  thead {
    box-shadow: 0 5px 10px #e1e5ee;
  }
  tbody {
    box-shadow: 0 5px 10px #e1e5ee;
  }
 


</style>
<body>
    <?php 
    $current=date("Y-m-d");
    $endate=date('Y-m-d', strtotime($current. ' + 15 days'));
    // $date = strtotime($current);
    // $ts=date('h:i A', strtotime($current));
    // echo $ts;
    ?>
  
    <main>
      
        
        <section class="login_part">
           
                    <div class="container mt-4 mb-4">
                        <div class="row align-items-center" >
                        <div class="col-1 col-lg-1" >
                        </div>
                            <div class="col-10 col-lg-10" >
                                <h3>Welcome Back {{$LoggedUserInfo->name}},</h3>
                               <center><h3>Permit To Work</h3></center>
                                <form class="row contact_form" action="/Uhome1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                    <table class="table table-bordered table-justify">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="date"><b>Date Issued:</b></label>&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:80%" class="form-control" id="date" name="date" value="{{$now}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="location"><b>Location:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text"  class="form-control" id="location" name="location" value="Aluva" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-12 form-group d-flex flex row align-items-center">
                                                        <label class="col-lg-2 pr-0" for="Electrical"><b>Types of Jobs:</b></label>
                                                        <div class="col-lg-10 pl-0">
                                                            <label class="pr-2"><input type="checkbox" name="Jobtype[]" value="Electrical"><b>Electrical</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="Hotwork"><b>Hotwork</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="Work At Height"><b>Work at height</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="Confined Space"><b>Confined space</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="Painting"><b>Painting</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="AC"><b>AC</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="Civil"><b>Civil</b></label>
                                                            <label class="px-2"><input type="checkbox" name="Jobtype[]" value="General"><b>General</b></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="display: none;">
                                            <td>
                                            <div class="row align-items-center">
                                            <label for="name"><b>Requestor/Person in charge</b></label>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="name"><b>Name:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:82%" class="form-control" id="name" name="name" value="{{$LoggedUserInfo->name}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="Designation"><b>Designation:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text"  class="form-control" id="Designation" name="Designation" value="{{$LoggedUserInfo->usertype}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="name"><b>Department:</b></label>
                                                        <input readonly type="text"  class="form-control" id="Department" name="Department" value="{{$LoggedUserInfo->deptname}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="empno"><b>Employee Number:</b></label>
                                                        <input readonly type="text"  class="form-control" id="empno" name="empno" value="{{$LoggedUserInfo->empno}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Contactno"><b>Contact Number:</b></label>
                                                        <input readonly type="text"  class="form-control" id="Contactno" name="Contactno" value="{{$LoggedUserInfo->contact}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="row align-items-center">
                                            <label class="col-md-12 form-group row" for="Workpermitvalidity"><b>Work permit validity  <center>Work permit validity is only for 15days,Afterwards reapply</center></b></label>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>Date From:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input type="date" class="form-control" onchange="change()" style="width:60%" id="fdate" name="fdate" value=""
                                                        placeholder="Date"></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="date" class="form-control" style="width:60%" id="tdate" name="tdate" value=""
                                                        placeholder="Date"></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                            </div>

                                            <div class="row align-items-center">
                                    
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>Time From:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input type="time" class="form-control" style="width:60%" id="ftime" name="ftime" value=""
                                                        placeholder=""></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input type="time" class="form-control" style="width:60%" id="ttime" name="ttime" value=""
                                                        placeholder=""></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                            </div>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            <div class="row align-items-center">
                                            <label class="col-md-12 form-group row" for=""><b>Applicant Details</b></label>
                                                    <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                    <label for="cname"><b>Name of the Contractor/Agency:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input type="text" style="width:70%" class="form-control" id="cname" name="cname" value=""
                                                              placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    
                                            </div>

                                            <div class="row align-items-center">
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="sname"><b>Name of the Supervisor at site:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    &nbsp&nbsp<input type="text" style="width:45%" class="form-control" id="Sname" name="Sname" value=""
                                                        placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="cno"><b>Contact Number:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                         <input type="text" style="width:57%" class="form-control" id="cno" name="cno" value=""
                                                         placeholder="">
                                                         <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    
                                            </div>
                                            <div class="row align-items-center">
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Number of persons involved:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             &nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" style="width:45%" class="form-control" id="no" name="no" value=""
                                                              placeholder="">
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                        </div>
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row ">
                                                             <label for="no"><b>Insurance:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             
                                                                <div class="col-md-12 form-group">
                                                                    <label><input type="radio" name="insurance" value="yes"><b>Yes</b></label>
                                                                    <label class="px-3"><input type="radio" name="insurance" value="no"><b>No</b></label>   
                                                                </div>
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                        </div>
                                                </div>
                                                
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <label class="col-md-12 form-group row" for=""><b>Job Description</b></label>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Exact Location of the job:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                               <textarea class="form-control" style="width:70%" id="eloc" name="eloc" value="" placeholder=""></textarea>
                                                                <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                </div>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Work to be carried out in detail:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             <textarea class="form-control" style="width:70%" id="desc" name="desc" value=""
                                                             placeholder=""></textarea>
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                </div>
                                                </div>
                                                  </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-12 form-group d-flex flex row align-items-center">
                                                        <label class="col-lg-2 pr-0" for="Electrical"><b>Equipments Used:</b></label>
                                                        <div class="col-lg-10 pl-0">
                                                            <label class="px-3"><input  type="checkbox" name="tools[]" value="Welding Machine"><b>Welding Machine</b></label>
                                                            <label class="px-3"><input  type="checkbox" name="tools[]" value="Gas Cutter"><b>Gas Cutter</b></label>
                                                            <label class="px-3"><input  type="checkbox" name="tools[]" value="Drilling/Grinding Machine"><b>Drilling/Grinding Machine</b></label>
                                                            <label class="px-3"><input  type="checkbox" name="tools[]" value="Electrical Tools"><b>Electrical Tools</b></label>
                                                            <label class="px-3"><input  type="checkbox" name="tools[]" value="Handtools"><b>Hand Tools</b></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row ">
                                                             <label class="pr-0" for="no"><b>Temprory electrical connection:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                <div class="col-md-8 form-group">
                                                                <label><input type="radio" name="electricity" value="Required"><b>Required</b></label>
                                                                <label class="px-3"><input type="radio" name="electricity" value="NotRequired"><b>Not Required</b></label>
                                                                </div>
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                        </div>
                                                        </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    
                                                    <center><button style="width:50%;" type="submit" value="submit" class="btn btn-success">
                                                        Submit
                                                    </button>
                                                    
                                                </center>
                                                    
                                                </td>
                                            </tr>
                                
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-lg-1" >
                        </div>


                              <script>
                                function change(){
                                    fdate = new Date($('#fdate').val());
                                    tdate = new Date(fdate.setDate(fdate.getDate()+15)).toISOString().split('.');
                                    console.log(tdate);
                                    output=tdate[0].split('T');
                                    $('#tdate').val(output[0]);
                                }
                              </script>              
                                 
                                        
                                   

                                
                                    

                                   
                                    
                                   

                                       

                                


                                       
                                   


                                   
                   
          
        </section>
       
        <!--================login_part end =================-->
    </main>

    @endsection