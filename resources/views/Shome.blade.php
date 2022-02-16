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
    <head>
        <script>
            function text(x) {
                if (x == 0) document.getElementById("isolation").style.display="block";
                else document.getElementById("isolation").style.display="none";
                return;
            }
        </script>


    </head>
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
                           <form class="row contact_form" action="/Shome1" method="post" novalidate="novalidate">
                                {{csrf_field()}}
                                <table class="table table-bordered table-justify">
                                        <tbody>
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
                                                              <label class="px-3"><input type="radio" name="safety1" value="yes"><b>Yes</b></label>
                                                              <label class="pl-3"><input type="radio" name="safety1" value="N/A"><b>N/A</b></label>
                                                          </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Access to fire Hydrant:</b></label>
                                                    <div class="col-md-12 form-group ">
                                                     <label class="px-3" ><input type="radio" name="safety2" value="yes"><b>Yes</b></label>
                                                     <label class="pl-3"><input type="radio" name="safety2" value="N/A"><b>N/A</b></label>
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Signage:</b></label>
                                                          <div class="col-md-12 form-group">
                                                              <label class="px-3"><input type="radio" name="safety1" value="yes"><b>Yes</b></label>
                                                              <label class="pl-3"><input type="radio" name="safety1" value="N/A"><b>N/A</b></label>
                                                          </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Appropriate PPE:</b></label>
                                                    <div class="col-md-12 form-group">
                                                         <label class="px-3"><input type="radio" name="safety4" value="yes"><b>Yes</b></label>
                                                         <label class="pl-3"><input type="radio" name="safety4" value="N/A"><b>N/A</b></label>

                                                     </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row align-items-center">
                                                
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Guardrails/Barricades:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety5" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety5" value="N/A"><b>N/A</b></label>

                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Machine Safety::</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety6" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety6" value="N/A"><b>N/A</b></label>

                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                              
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate ventilation:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety7" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety7" value="N/A"><b>N/A</b></label>

                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Adequate Lighting:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety8" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety8" value="N/A"><b>N/A</b></label>

                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                               
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Electrical Safety:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety9" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety9" value="N/A"><b>N/A</b></label>

                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-lg-6 form-group d-flex flex-row align-items-center">
                                                    <label class="col-6 col-lg-6 pl-0"><b>Fall Protection/Safety Belt:</b></label>
                                                    <div class="col-md-12 form-group">
                                                        <label class="px-3"><input type="radio" name="safety10" value="yes"><b>Yes</b></label>
                                                        <label class="pl-3"><input type="radio" name="safety10" value="N/A"><b>N/A</b></label>

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
                                                        <label class="px-3"><input type="radio" name="isolation" value="Required"><b>Required</b></label>
                                                        <label class="pl-3"><input type="radio" name="isolation" value="NotRequired"><b>NotRequired</b></label>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                            
                                                <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                        <label for="isolation1"><b>Isolation done by:</b></label>&nbsp&nbsp&nbsp
                                                        <input type="text" style="width:80%" class="form-control" id="isolation1" name="isolation1" value="" placeholder="">
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
                                                </div>
                                                    <div class="col-12 col-lg-12 form-group d-flex flex-row align-items-center">
                                                    <label class="px-4"><input type="checkbox" name="tools" value="firesafety"><b>Fire Safety </b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="Electricalsafety"><b>Electrical Safety</b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="Workingatheight"><b>Working at height</b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="PPEsafety"><b>PPE Safety</b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="ConfinedSpaceSafety"><b>Confined Space Safety</b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="Housekeeping"><b>House keeping</b></label>
                                                    <label class="pl-4"><input type="checkbox" name="tools[]" value="Incidentreporting"><b>Incident Reporting</b></label>
                                                    </div>
                                                </div>
                                            
                                                </td>
                                           </tr>

                                           <tr>
                                                <td>
                                                <div class="row align-items-center">
                                                <label class="pl-3"><b>Precuations to be taken prior to commencement and during work:</b></label>&nbsp&nbsp&nbsp
                                                        <input type="text" style="width:49%" class="form-control" id="prec" name="prec" value="" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>
                                           <div class="row align-items-center">
                                                <label class="pl-3"><b>Remarks if any:</b></label>&nbsp&nbsp&nbsp
                                                        <input type="text" style="width:79.5%" class="form-control" id="remarks" name="remarks" value="" placeholder="">
                                                        <span style="color:red" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            
                                                </td>
                                           </tr>
                                           <tr>
                                               <td>
                                         
                                               
                                           <Center><button type="submit" value="Submit" style="width: 500px; height:80px;" class="btn btn-success btn-lg" id="Submit">
                                                    Submit
                                                </button></Center>
                                                
                                                </td>
                                           </tr>

                                        </tbody>
                                </table>

  
                                  
                                  

                              

                                    
                                    

                                    <div class="col-md-12 ">
                                      
                                       

                                       
                                    
                                       
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