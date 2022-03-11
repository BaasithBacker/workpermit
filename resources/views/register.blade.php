@extends('theme3')


@section('content')
<body>
    <!-- <header> -->
    
        
                    <!-- Mobile Menu -->
                    <!-- <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Header End -->
    <!-- </header> -->
    <main>
        <!-- Hero Area Start-->
        <!-- <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Register</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part  ">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-3 col-md-3"> 
                    </div>
                 
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                               <center><h3>Add New User's <br></h3></center> 
                                   
                                <form class="row contact_form" action="/Register1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name" value=""
                                            placeholder="Name">
                                            <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="contact" name="contact" value=""
                                            placeholder="contact">
                                            <span style="color:red" >@error('contact') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="deptname" name="deptname" value=""
                                            placeholder="Department Name">
                                            <span style="color:red" >@error('deptname') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="empno" name="empno" value=""
                                            placeholder="Employee Number">
                                            <span style="color:red" >@error('empno') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                    <select required="true" name="role" id="role" class="form-control">
                                    <option selected="true" disabled="disabled" value="">--Select Role--</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Security Department">Security Department</option>
                                    <option value="Maintenance Department">Maintenance Department</option>
                                    <option value="Safety Department">Safety Department</option>
                                     </select>
                                     </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                            <span style="color:red" >@error('password') {{$message}} @enderror</span>
                                    </div>
                                   
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value=""
                                            placeholder="ConfirmPassword">
                                            <span style="color:red" >@error('confirmpassword') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group">
                                       
                                        <button type="submit" value="register" style="width:500px;" class="btn btn-danger btn-lg">
                                            Register
                                        </button>
                                       
                                    </div>
                                    <div class="col-lg-3 col-md-3"> 
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Register_part end =================-->
    </main>
   
    
 @endsection