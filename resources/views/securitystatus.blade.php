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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <center><h3>Request Status</h3></center>

                                </div>
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
                                        <td>{{$l->securitystatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                        <td>{{$l->maintanancestatus}}</td>
                                    
                                       
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