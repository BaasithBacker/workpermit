@extends('logintheme')


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
        <!-- Hero Area Start
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Login</h2>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>New Staff? please signup to access the system</h2>
                                <p>Please Signup using the below link</p>
                                <a href="/Register" class="btn_3">Signup</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now,  </h3>
                                <form class="row contact_form" action="/Login1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="empno" name="empno" value=""
                                            placeholder="Employee Number">
                                            <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                            <span style="color:red" >@error('password') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            {{-- <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Remember me</label> --}}
                                        </div>
                                        <button type="submit" style="width: 500px;" value="submit" class="btn btn-primary btn-lg">
                                            log in
                                        </button>
                                        {{-- <a class="lost_pass" href="#">forget password?</a> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
   
    
 @endsection