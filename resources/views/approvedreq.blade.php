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

    <main>
        
        
        <section class="login_part  ">
        
                    <div class="col-lg-12 col-md-12">
                        <div class="login_part_form">
                            <div class="">
                                
                                <form class="row contact_form" action="/security" method="get" novalidate="novalidate">
                                {{csrf_field()}}
                      <center>   <h3 >Approved Request's</h3> </center>
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                <table class="table table-table-bordered table-striped">
                                    
                                    <tr>
                                        <th style="background-color:#4f546c;padding:10px;">Permit Number</th>
                                        <th style="background-color:#4f546c;padding:10px; width:15%;">Date Of Issued</th>
                                        
                                        <!-- <td style="padding:10px">From Date</td>
                                        <td style="padding:10px">To Date</td>
                                        <td style="padding:10px">From Time</td>
                                        <td style="padding:10px">To Time</td>
                                        <td style="padding:10px">Agency Name</td>
                                        <td style="padding:10px">Supervisor Name</td>
                                        <td style="padding:10px">Supervisor Contact</td>
                                        <td style="padding:10px">No Of Persons</td>
                                        <td style="padding:10px">Insurance</td>
                                        <td style="padding:10px">Job Location</td>
                                        <td style="padding:10px">Work Details</td>
                                        <td style="padding:10px">Equipments Used</td>
                                        <td style="padding:10px">Temprory Electric</td> -->
                                        <th style="background-color:#4f546c;padding:10px">Security Status</th>
                                        <th style="background-color:#4f546c;padding:10px">maintanance Status</th>
                                        <th style="background-color:#4f546c;padding:10px">Safety Status</th>
                                        <th style="background-color:#4f546c;padding:10px">Print</th>
 

                                        <!-- <td style="padding:10px"><b>Rejected</b></td> -->
                                    </tr>
                                   
                                    @foreach($data as $l)
                                    <tbody>
                                    <tr>
                                        <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('d-m-Y')}}</td>
                                        
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
                                        <td>{{$l->maintanancestatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                        
                                        <td>
                                            <a id="btn" value="print" class="btn btn-danger" href="{{url('printview',$l->id)}}">PRINT</a>
                                        </td>

                                        <!-- <td>
                                            <a id="brn" value="Rejected" class="btn btn-danger" href="">Rejected<a>
                                        </td> -->
                                       
                                    </tr>
                                    </tbody>
                                    @endforeach
                              
                                </table>
                                {{$data->links()}}
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                </div>
                            </div>
                        </div>
                      </div>
          
                    </section>
                    <!-- </table> -->
        <!--================login_part end =================-->
    </main>

    @endsection