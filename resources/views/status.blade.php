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
            <!-- <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Please Fill in the form</h2> -->
                                <!-- <p>Add new Category of the products for the customer, customers are valuable</p> -->
<!--                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <table class="table"> -->
                    <div class="col-lg-12 col-md-12">
                        <div class="login_part_form">
                            <div class="">
                                
                                <form class="row contact_form" action="/security" method="get" novalidate="novalidate">
                                {{csrf_field()}}
                                <center><h3>Request Status</h3></center>
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                <table class="table table-bordered table-primary table-align-content-center">
                                    <tr>
                                        <td ><b>Permit Number</b></td>
                                        <td ><b>Date Of Issued</b></td>
                                        <td ><b>Location</b></td>
                                        <td ><b>Name Of Requestor</b></td>
                                        <td ><b>Department</b></td>
                                        <td ><b>Contact Number</b></td>
                                        <!--10px"><b>From Date</b></td>
                                        <td ><b>To Date</b></td>
                                        <td ><b>From Time</b></td>
                                        <td ><b>To Time</b></td>
                                        <td ><b>Agency Name</b></td>
                                        <td ><b>Supervisor Name</b></td>
                                        <td ><b>Supervisor Contact</b></td>
                                        <td ><b>No Of Persons</b></td>
                                        <td ><b>Insurance</b></td>
                                        <td ><b>Job Location</b></td>
                                        <td ><b>Work Details</b></td>
                                        <td ><b>Equipments Used</b></td>
                                        <td ><b>Temprory Electric</b></td> -->
                                        <td ><b>Security Status</b></td>
                                        <td ><b>Safety Status</b></td>
                                        <td ><b>maintanance Status</b></td>
                                        <!-- <td style="padding:10px"><b>Rejected</b></td> -->
                                    </tr>

                                    @foreach($data as $l)
                                    
                                    <tr>
                                        <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('y-m-d')}}</td>
                                        <td>{{$l->location}}</td>
                                        <td>{{$l->name}}</td>
                                        <td>{{$l->dept}}</td>
                                        <td>{{$l->contactno}}</td>
                                        <!-- <td>{{$l->fdate}}</td>
                                        <td>{{$l->tdate}}</td>
                                        <td>{{$l->ftime}}</td>
                                        <td>{{$l->ttime}}</td>
                                        <td>{{$l->agencyname}}</td>
                                        <td>{{$l->supervisorname}}</td>
                                        <td>{{$l->supervisorcontact}}</td>
                                        <td>{{$l->noofpersons}}</td>
                                        <td>{{$l->insurance}}</td>
                                        <td>{{$l->joblocation}}</td>
                                        <td>{{$l->workdetails}}</td>
                                        <td>{{$l->equipmentsused}}</td>
                                        <td>{{$l->tempelectric}}</td> -->
                                        <td>{{$l->securitystatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                        <td>{{$l->maintanancestatus}}</td>
                                        <!-- <td>
                                            <a id="btn" value="view" class="btn btn-primary" href="{{url('mview',$l->id)}}">View</a>
                                        </td> -->

                                        <!-- <td>
                                            <a id="brn" value="Rejected" class="btn btn-danger" href="">Rejected<a>
                                        </td> -->
                                       
                                    </tr>
                               
                                    @endforeach
                              
                                </table>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                </div>
                        
                            
                        </div>
                      </div>
          
                    </section>
                    <!-- </table> -->
        <!--================login_part end =================-->
    </main>

    @endsection