@extends('theme')


@section('content')

<style>
  
</style>

<body>
    
    <main>
      
        
        <section class="login_part">
           
                    <div class="container mt-4 mb-4">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12">
                        
                                    <table id="example" class="table table-bordered table-justify ">
                                        <tbody>
                                        <tr> 
                                            <td>
                                                
                                                <div class="row align-items-center" style="margin: 0px;">
                                                <center><h3>Permit To Work Request</h3></center>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        
                                                        <label class="pr-3" for="date"><b>Permit Number:</b></label>   
                                                        <label style="margin-left:2%;">{{$data->id}}</label>   
                                                        <!-- <input style="outline:none;"  readonly type="text"  class="form-control" id="date" name="date" value="{{$data->id}}" placeholder=""> -->
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="date"><b>Date Issued:</b></label>   
                                                        <label style="margin-left:2%;">{{Carbon\Carbon::parse($data->date)->format('d-m-Y')}}</label>   
                                                        <!-- <input readonly type="text" class="form-control" id="date" name="date" value="{{Carbon\Carbon::parse($data->date)->format('d-m-Y')}}" placeholder=""> -->                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="location"><b>Location:</b></label>  
                                                        <label style="margin-left:2%;">{{$data->location}}</label>                  
                                                        <!-- <input readonly type="text"  class="form-control" id="location" name="location" value="{{$data->location}}" placeholder=""> -->
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
                                                            <label class="pr-3" for="">{{$data->jobtypes}}</label>
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
                                                    <label for="name"><b>Name:</b></label> 
                                                    <label style="margin-left:2%;">{{$data->name}}</label>                 
                                                    <!-- <input readonly type="text"  class="form-control" id="name" name="name" value="  {{$data->name}}" placeholder=""> -->
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                        <label for="Designation"><b>Designation:</b></label>   
                                                        <label style="margin-left:2%;">{{$data->desig}}</label>     
                                                        <!-- <input readonly type="text"  class="form-control" id="Designation" name="Designation" value="{{$data->desig}}" placeholder=""> -->
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Department"><b>Department:</b></label>
                                                        <label style="margin-left:2%;">{{$data->dept}}</label>
                                                        <!-- <input readonly type="text"  class="form-control" id="Department" name="Department" value="{{$data->dept}}" placeholder=""> -->
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="empno"><b>Employee Number:</b></label>
                                                        <label style="margin-left:2%;">{{$data->empno}}</label>
                                                        <!-- <input readonly type="text"  class="form-control" id="empno" name="empno" value="{{$data->empno}}" placeholder=""> -->
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Contactno"><b>Contact Number:</b></label>
                                                        <label style="margin-left:2%;">{{$data->contactno}}</label>
                                                        <!-- <input readonly type="text"  class="form-control" id="Contactno" name="Contactno" value="{{$data->contactno}}" placeholder=""> -->
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
                                                        <label for="text"><b>Date From:</b></label>   
                                                        <label style="margin-left:2%;">{{Carbon\Carbon::parse($data->fdate)->format('d-m-Y')}}</label>     
                                                        <!-- <input readonly type="date" class="form-control"  id="fdate" name="fdate" value="{{$data->fdate}}" placeholder="Date"></Label>  -->
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>    
                                                        <label style="margin-left:2%;">{{Carbon\Carbon::parse($data->tdate)->format('d-m-Y')}}</label>    
                                                        <!-- <input readonly type="date" class="form-control"  id="tdate" name="tdate" value="{{$data->tdate}}"placeholder="Date"></Label>  -->
                                                    </div>
                                            </div>

                                            <div class="row align-items-center">
                                    
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>Time From:</b></label>    
                                                        <label style="margin-left:2%;">{{$data->ftime}}</label>    
                                                        <!-- <input readonly type="time" class="form-control"  id="ftime" name="ftime" value="{{$data->ftime}}"placeholder=""></Label>  -->
                                                    </div>
                                                    <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                        <label for="Date"><b>To:</b></label>
                                                        <label style="margin-left:2%;">{{$data->ttime}}</label>        
                                                    </div>
                                            </div>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            <div class="row align-items-center">
                                            <label class="col-md-12 form-group row" for=""><b>Applicant Details</b></label>
                                                    <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                    <label for="cname"><b>Name of the Contractor/Agency:</b></label>        
                                                    <label style="margin-left:2%;">{{$data->agencyname}}</label>                
                                                        <!-- <input readonly type="text"  class="form-control" id="cname" name="cname" value="{{$data->agencyname}}"placeholder=""> -->
                                                    </div>
                                                    
                                            </div>

                                            <div class="row align-items-center">
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="sname"><b>Name of the Supervisor at site:</b></label>    
                                                    <label style="margin-left:2%;">{{$data->supervisorname}}</label>                  
                                                      <!-- <input readonly type="text"  class="form-control" id="Sname" name="Sname" value="{{$data->supervisorname}}"placeholder=""> -->
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label for="cno"><b>Contact Number:</b></label>      
                                                    <label style="margin-left:2%;">{{$data->supervisorcontact}}</label>                
                                                         <!-- <input readonly type="text"  class="form-control" id="cno" name="cno" value="{{$data->supervisorcontact}}" placeholder=""> -->
                                                    </div>
                                                    
                                            </div>
                                            <div class="row align-items-center">
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Number of persons involved:</b></label> 
                                                             <label style="margin-left:2%;">{{$data->noofpersons}}</label>                     
                                                                  <!-- <input readonly type="number"  class="form-control" id="no" name="no" value="{{$data->noofpersons}}"placeholder=""> -->
                                                        </div>
                                                        <div class="col-6 col-lg-6 form-group d-flex flex-row ">
                                                             <label for="no"><b>Insurance:</b></label>                 
                                                             
                                                                <div class="col-md-12 form-group">
                                                                     <label style="margin-left:2%;">{{$data->insurance}}</label>
                                                                      
                                                                </div>
                                                        </div>
                                                </div>
                                                
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <label class="col-md-12 form-group row" for=""><b>Job Description</b></label>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Exact Location of the job:</b></label>  
                                                             <label style="margin-left:2%;">{{$data->joblocation}}</label>                                          
                                                               <!-- <input readonly class="form-control"  id="eloc" name="eloc" value="{{$data->joblocation}}" placeholder=""></textarea> -->
                                                </div>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Work to be carried out in detail:</b></label>     
                                                             <label style="margin-left:2%;">{{$data->workdetails}}</label>                 
                                                             <!-- <input readonly class="form-control"  id="desc" name="desc" value="{{$data->workdetails}}"placeholder=""></textarea> -->
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
                                                            <label style="margin-left:2%;">{{$data->equipmentsused}}</label>
                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row ">
                                                             <label class="pr-0" for="no"><b>Temprory electrical connection:</b></label>          
                                                                <div class="col-md-8 form-group">
                                                                <label style="margin-left:2%;">{{$data->tempelectric}}</label>
                                                                </div>
                                                        </div>
                                                        </div>

                                                </td>
                                            </tr>
                                            

                                             <tr>
                                            <td>
                                                <table class="bordered">
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <input  type="text" name="pid" value="{{$data->id}}" hidden="true">
                                                <label  for="Safety Precautions"><b>Safety Precautions</b></label>
                                                </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Fire Extinguisher:</b></label>
                                                          
                                                              <label style="margin-left:2%;">{{$data->FireExtinguisher}}</label>
                                                             
                                                   
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Access to fire Hydrant:</b></label>
                                                    
                                                     <label style="margin-left:2%;">{{$data->AccesstofireHydrant}}</label>
                                
                                                   
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Signage:</b></label>
                                                          
                                                              <label style="margin-left:2%;">{{$data->Signage}}</label>
                                                       
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Appropriate PPE:</b></label>
                                                    
                                                         <label style="margin-left:2%;">{{$data->AppropriatePPE}}</label>

                                                     
                                                    </div>
                                                </div>

                                                
                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Guardrails/Barricades:</b></label>
                                                    
                                                        <label style="margin-left:2%;">{{$data->Guardrails}}</label>
                                                  
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Machine Safety:</b></label>
                                                    
                                                        <label style="margin-left:2%;">{{$data->MachineSafety}}</label>

                                               
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                              
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate ventilation:</b></label>
                                                    
                                                        <label style="margin-left:2%;">{{$data->Adequateventilation}}</label>

                                                   
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate Lighting:</b></label>
                                                    
                                                        <label style="margin-left:2%;">{{$data->AdequateLighting}}</label>

                                                    
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                               
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Electrical Safety:</b></label>
                                                    
                                                        <label style="margin-left:2%;">{{$data->ElectricalSafety}}</label>
                                                   
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Fall Protection/Safety Belt:</b></label>
                                                   
                                                        <label style="margin-left:2%;">{{$data->FallProtection}}</label>

                                            
                                                  
                                                </div>

                                            </td>
                                        </tr>
                                        </table>

                                            <tr>
                                                <td>
                                                <div class="row align-items-center">
                                            
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Isolation:</b></label>
                                             
                                                        <label style="margin-left:2%;">{{$data->Isolation}}</label>
                                                    
                                                    </div>
                                                
                                                <div class="row align-items-center">
                                            
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                        <label for="isolation1"><b>Isolation done by:</b></label>  
                                                        <label style="margin-left:2%;">{{$data->isolation1}}</label>    
                                                        <!-- <input readonly type="text"  class="form-control" id="isolation1" name="isolation1" value="{{$data->isolation1}}" placeholder=""> -->
                                                    </div>
                                        </div>
                                                </td>
                                           </tr>


                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label><b>Training/Toolbox Talk Details</b></label>
                                                
                                                    <label style="margin-left:2%;">{{$data->trainingtalk}}</label>
                                                   
                                                    </div>
                                                </div>
                                            
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Precuations to be taken prior to commencement and during work:</b></label>   
                                                <label style="margin-left:2%;">{{$data->precuation}}</label>   
                                                        <!-- <input readonly type="text"  class="form-control" id="prec" name="prec" value="{{$data->precuation}}" placeholder=""> -->
                                                </div>
                                                </div>
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>
                                           <div class="row align-items-center">
                                           <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">   
                                                <label class="pl-6"><b>Remarks if any:</b></label>
                                                <label style="margin-left:2%;">{{$data->remarks}}</label>              
                                                        <!-- <input readonly type="text"  class="form-control " id="remarks" name="remarks" value="{{$data->remarks}}" placeholder=""> -->
                                                </div>
                                                </div>
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                <label class="pl-6"><b>Performing authority acceptance(To be completed by contractor)</b></label>   
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
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label style="margin-right: 2%;" class="pl-6"><b>Security Department</b></label>   
                                                <label for=""><b>{{$data->securitystatus}}</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label style="margin-right: 2%;" class="pl-6"><b>Maintenance Department</b></label>   
                                                <label for=""><b>{{$data->safetystatus}}</b></label>
                                                </div>
                                                <div class="col-4 col-lg-4 form-group d-flex flex-row align-items-center">
                                                <label style="margin-right: 2%;" class="pl-6"><b>Safety Department</b></label>   
                                                <label for=""><b>{{$data->maintanancestatus}}</b></label>
                                                </div>
                                                </div>
                                                </td>
                                           </tr>
                                         
                                           
                                            

                                        </tbody>
                                    </table>
                                    <tr>
                                           <td>
                                                <div class="row align-items-center">
                                                <div class="col-12 col-lg-12 ">
                                                    <center>
                                                <!-- <a style="text-align:center;" value="approve" class="btn btn-success" href="{{url('htmlPdf',$data->id)}}">DOWNLOAD</a> </div> -->
                                                <button class="btn btn-success" onclick="myPrintFunction()" id="print">print</button>
                                                    <script>
                                                        function myPrintFunction() {
                                                            var printButton = document.getElementById("print");
                                                             //Set the print button visibility to 'hidden' 
                                                             printButton.style.visibility = 'hidden';
                                                          
                                                            window.print();
                                                          
                                                        }
                                                    </script> 
                                                </center>
                                                </div>
                                                </div>
                                                </td>
                                            </tr>

                        </div>
                    </div>                  
                    </div>         
          
        </section>
        
       
        <!--================login_part end =================-->
    </main>



<script type="text/javascript">
    
   function printpage() {
    window.print();
}

</script>
    @endsection