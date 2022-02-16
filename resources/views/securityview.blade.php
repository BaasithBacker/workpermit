@extends('theme')


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
        <!-- Hero Area Start-->
        <!-- <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Add Category</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        
        <section class="login_part">
           
                    <div class="container mt-4 mb-4">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-12">
                               <center><h3>Permit To Work Request</h3></center>
                                <!-- <form class="row contact_form" action="/Uhome1" method="post" novalidate="novalidate">
                                {{csrf_field()}} -->
                                    <table class="table table-bordered table-justify">
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
                                                        <input readonly type="text" style="width:80%" class="form-control" id="date" name="date" value="{{Carbon\Carbon::parse($data->date)->format('d-m-y')}}" placeholder="">
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
                                                    <label for="cname"><b>Name of the Contractor/Agency:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input readonly type="text" style="width:70%" class="form-control" id="cname" name="cname" value="{{$data->agencyname}}"
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
                                                               <input readonly class="form-control" style="width:70%" id="eloc" name="eloc" value="{{$data->joblocation}}" placeholder=""></textarea>
                                                                <span style="color:red" >@error('desc') {{$message}} @enderror</span>
                                                </div>
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                             <label for="no"><b>Work to be carried out in detail:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                             <input readonly class="form-control" style="width:70%" id="desc" name="desc" value="{{$data->workdetails}}"
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
                                                <div class="col-6 col-lg-6 form-group d-flex flex-row ">
                                                <a style="width:100%;height:50px" id="btn" value="approve" class="btn btn-success" href="{{url('approved',$data->id)}}">Approve</a> </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row ">
                                                    <a style="width:100%;height:50px" id="btn" value="reject" class="btn btn-danger" href="{{url('rejected',$data->id)}}">Reject</a> </div>
                                                </div>
                                                    
                                                </td>
                                            </tr>
                                        </tbody
                                    </table>
                                </form>
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
        </table>
        <!--================login_part end =================-->
    </main>

    @endsection