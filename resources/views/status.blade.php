@extends('theme3')


@section('content')
<style>
      th{
        padding: 1rem 2rem;
        letter-spacing: 0.05rem;
        text-transform: uppercase;
        color:#f9fbff;
        font-size: 0.9rem;
      }
      table {
            border-collapse: collapse;
            box-shadow: 0 5px 10px #e1e5ee;
            background-color: white;
            text-align: left;
            overflow: hidden;
            -moz-border-radius:10px;
            -webkit-border-radius:10px;
            border-radius:10px
        }
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
          color: #4f546c;
          background-color: #f9fbff;
        }
  </style>
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
                                <table  class="table table-table-bordered table-striped ">
                                    <tr>
                                        <th style="background-color:#4f546c;padding:10px;color:#fff;" >Permit Number</th>
                                        <th style="background-color:#4f546c;padding:10px;">Date Of Issued</th>
                                        <th style="background-color:#4f546c;padding:10px;">Security Status</th>
                                        <th style="background-color:#4f546c;padding:10px;">maintanance Status</th>
                                        <th style="background-color:#4f546c;padding:10px;">Safety Status</th>
                                        <th style="background-color:#4f546c;padding:10px;">View</th>
                                        
                                        <!-- <td style="padding:10px"><b>Rejected</b></td> -->
                                    </tr>

                                    @foreach($data as $l)
                                    
                                    <tr>
                                        <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('d-m-Y')}}</td>
                                        <td>{{$l->securitystatus}}</td>
                                        <td>{{$l->maintanancestatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                        <td>
                                            <a id="btn" value="statusview" class="btn btn-danger" href="{{url('statusview',$l->id)}}">View</a>
                                        </td>
                                  
                                       
                                    </tr>
                               
                                    @endforeach
                              
                                </table>
                                {{$data->links()}}
                                
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