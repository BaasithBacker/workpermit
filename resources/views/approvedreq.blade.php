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
 




    <main>
    <body>
    <div class="container">

<div class="row">
<center><h3>Approved Request's</h3></center>  

    <form class="d-flex" action="report" method="POST">
        {{ csrf_field() }}
      </form>
      


    <div class="col-lg-12 col-xl-12 col-md-12">
        <br> <br><table id="chacko" class="table">
       
        <tr>
        <th style="background-color:#4f546c;padding:10px;">Permit Number</th>
                                        <th style="background-color:#4f546c;padding:10px; width:15%;">Date Of Issued</th>
                                        <th style="background-color:#4f546c;padding:10px">Security Status</th>
                                        <th style="background-color:#4f546c;padding:10px">maintanance Status</th>
                                        <th style="background-color:#4f546c;padding:10px">Safety Status</th>
                                        <th style="background-color:#4f546c;padding:10px">Print</th>                                 
                                    </tr>

            @foreach($data as $l)
                                    
            <tr>
            <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('d-m-Y')}}</td>
                                        <td>{{$l->securitystatus}}</td>
                                        <td>{{$l->maintanancestatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                        
                                        <td>
                                            <a id="btn" value="print" class="btn btn-danger" href="{{url('printview',$l->id)}}">PRINT</a>
                                        </td>
                                  
                                       
                                    </tr>
                               
                                    @endforeach
                               
            </table>
            {{$data->links()}}
                                  </div>


                                  </div>


                                  </div>
    
    </main>
    </body>
        
        
                    <!-- </table> -->
        <!--================login_part end =================-->


    @endsection