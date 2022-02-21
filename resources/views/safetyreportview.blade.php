@extends('theme3')


@section('content')
<body>
    <header>
        
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
      
        
        <section class="login_part">
           
                    <div class="container mt-4 mb-4">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12">
                               <center><h3>Permit To Work Request</h3></center>
                                <form  class="row contact_form" action="" method="post" novalidate="novalidate">
                              
                                    <table id="example" class="table table-bordered table-justify">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="row align-items-center">
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="date"><b>Permit Number:</b></label>&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:80%" class="form-control" id="date" name="date" value="{{$data->id}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="date"><b>Date Issued:</b></label>&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:80%" class="form-control" id="date" name="date" value="{{Carbon\Carbon::parse($data->date)->format('d-m-Y')}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="location"><b>Location:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text"  class="form-control" id="location" name="location" value="{{$data->location}}" placeholder="">
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
                                                            <label class="pr-3" for=""><b>{{$data->jobtypes}}</b></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="row align-items-center">
                                            <label for="name"><b>Requestor/Person in charge</b></label>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="name"><b>Name:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:82%" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="Designation"><b>Designation:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text"  class="form-control" id="Designation" name="Designation" value="{{$data->desig}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="name"><b>Department:</b></label>
                                                        <input readonly type="text"  class="form-control" id="Department" name="Department" value="{{$data->dept}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="empno"><b>Employee Number:</b></label>
                                                        <input readonly type="text"  class="form-control" id="empno" name="empno" value="{{$data->empno}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Contactno"><b>Contact Number:</b></label>
                                                        <input readonly type="text"  class="form-control" id="Contactno" name="Contactno" value="{{$data->contactno}}" placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="row align-items-center">
                                            <label class="col-md-12 form-group row" for="Workpermitvalidity"><b>Work permit validity</b></label>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="text"><b>Date From:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="date" class="form-control" style="width:60%" id="fdate" name="fdate" value="{{$data->fdate}}"
                                                        placeholder="Date"></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="date" class="form-control" style="width:60%" id="tdate" name="tdate" value="{{$data->tdate}}"
                                                        placeholder="Date"></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                            </div>

                                            <div class="row align-items-center">
                                    
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>Time From:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="time" class="form-control" style="width:60%" id="ftime" name="ftime" value="{{$data->ftime}}"
                                                        placeholder=""></Label> 
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="time" class="form-control" style="width:60%" id="ttime" name="ttime" value="{{$data->ttime}}"
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
                                                    <label for="cname"><b>Name of the Contractor/Agency:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:80%" class="form-control" id="cname" name="cname" value="{{$data->agencyname}}"
                                                              placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    
                                            </div>

                                            <div class="row align-items-center">
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="sname"><b>Name of the Supervisor at site:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    &nbsp&nbsp<input readonly type="text" style="width:45%" class="form-control" id="Sname" name="Sname" value="{{$data->supervisorname}}"
                                                        placeholder="">
                                                        <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="cno"><b>Contact Number:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                         <input readonly type="text" style="width:72%" class="form-control" id="cno" name="cno" value="{{$data->supervisorcontact}}"
                                                         placeholder="">
                                                         <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                    </div>
                                                    
                                            </div>
                                            <div class="row align-items-center">
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Number of persons involved:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             &nbsp&nbsp&nbsp&nbsp&nbsp<input readonly type="number" style="width:45%" class="form-control" id="no" name="no" value="{{$data->noofpersons}}"
                                                              placeholder="">
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                        </div>
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row ">
                                                             <label for="no"><b>Insurance:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             
                                                                <div class="col-md-12 form-group">
                                                                   &nbsp;&nbsp; <label class="pr-3"><b>{{$data->insurance}}</b></label>
                                                                      
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
                                                               <input readonly class="form-control" style="width:80%" id="eloc" name="eloc" value="{{$data->joblocation}}" placeholder=""></textarea>
                                                                <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                </div>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Work to be carried out in detail:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             <input readonly class="form-control" style="width:80%" id="desc" name="desc" value="{{$data->workdetails}}"
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
                                                            <label class="px-3"><b>{{$data->equipmentsused}}</b></label>
                                                      
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
                                                                <label><b>{{$data->tempelectric}}</b></label>
                                                                </div>
                                                             <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                        </div>
                                                        </div>

                                                </td>
                                            </tr>
                                            

                                             <tr>
                                            <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <input type="text" name="pid" value="{{$data->id}}" hidden="true">
                                                <label  for="Safety Precautions"><b>Safety Precautions</b></label>
                                                </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Fire Extinguisher:</b></label>
                                                          <div class="col-md-12 form-group">
                                                              <label class="px-3"><b>{{$data->FireExtinguisher}}</b></label>
                                                             
                                                          </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Access to fire Hydrant:</b></label>
                                                    <div class="col-md-12 form-group ">
                                                     <label class="px-3" ><b>{{$data->AccesstofireHydrant}}</b></label>
                                
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Signage:</b></label>
                                                          <div class="col-md-12 form-group">
                                                              <label class="px-3"><b>{{$data->Signage}}</b></label>
                                                          </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Appropriate PPE:</b></label>
                                                    <div class="col-md-12 form-group">
                                                         <label class="px-3"><b>{{$data->AppropriatePPE}}</b></label>

                                                     </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Guardrails/Barricades:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->Guardrails}}</b></label>
                                                      

                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Machine Safety:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->MachineSafety}}</b></label>

                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                              
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate ventilation:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->Adequateventilation}}</b></label>

                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate Lighting:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->AdequateLighting}}</b></label>

                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                               
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Electrical Safety:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->ElectricalSafety}}</b></label>
                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Fall Protection/Safety Belt:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->FallProtection}}</b></label>

                                                    </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                            
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Isolation:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><b>{{$data->Isolation}}</b></label>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                            
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                        <label for="isolation1"><b>Isolation done by:</b></label>&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:90%" class="form-control" id="isolation1" name="isolation1" value="{{$data->isolation1}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                        </div>
                                                </td>
                                           </tr>


                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label><b>Training/Toolbox Talk Details</b></label>
                                                
                                                    <label class="px-4"><b>{{$data->trainingtalk}} </b></label>
                                                   
                                                    </div>
                                                </div>
                                            
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Precuations to be taken prior to commencement and during work:</b></label>&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:60%" class="form-control" id="prec" name="prec" value="{{$data->precuation}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                                </div>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>
                                           <div class="row align-items-center">
                                           <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">   
                                                <label class="pl-6"><b>Remarks if any:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:90%" class="form-control " id="remarks" name="remarks" value="{{$data->remarks}}" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                                </div>
                                                </td>
                                           </tr>

                                           <!-- <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Performing authority acceptance(To be completed by contractor)</b></label>&nbsp&nbsp&nbsp
                                                </div>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">

                                                <label class="pl-6"><b>I certify that I have read and understand this permit and the work will be carried out in accordance with requirements.</b></label>      
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    <label for=""><b>Name</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label for=""><b>Signature</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label for=""><b>Date</b></label>
                                                </div>
                                                </div>
                                                </div>
                                                </td>
                                           </tr> -->

                                           <!-- <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Security Department</b></label>&nbsp&nbsp&nbsp
                                                <label for=""><b>{{$data->securitystatus}}</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Maintenance Department</b></label>&nbsp&nbsp&nbsp
                                                <label for=""><b>{{$data->safetystatus}}</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Safety Department</b></label>&nbsp&nbsp&nbsp
                                                <label for=""><b>{{$data->maintanancestatus}}</b></label>
                                                </div>
                                                </div>
                                                </td>
                                           </tr> -->
                                          
                                           
                                           
                                            

                                        </tbody
                                    </table>
                                    
                                </form>
                                <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 ">
                                                    <center>
                                                <a style="text-align:center;width:50%;"  value="back" class="btn btn-success" href="/safetyreport" >Back</a> </div>
                                                    
                                                </center>
                                                </td>
                                            </tr>
                            </div>
                        </div>
                    </div>             
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        
       
        <!--================login_part end =================-->
    </main>
  
    @endsection