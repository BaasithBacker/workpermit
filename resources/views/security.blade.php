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
    <div class="container">

<div class="row">
<center><h3>Security Department Pending Request's</h3></center>  

    <form class="d-flex" action="report" method="POST">
        {{ csrf_field() }}
      </form>
      


    <div class="col-lg-12 col-xl-12 col-md-12">
        <br> <br><table id="chacko" class="table table-responsive-lg">
       
        <tr>
                                        <th style="background-color:#4f546c;padding:10px;">Permit Number</th>
                                        <th style="background-color:#4f546c;padding:10px;">Date Of Issued</th>
                                        <th style="background-color:#4f546c;padding:10px;">Location</th>
                                        <th style="background-color:#4f546c;padding:10px;">Name Of Requestor</th>
                                        <th style="background-color:#4f546c;padding:10px;">Designation</th>
                                        <th style="background-color:#4f546c;padding:10px;">Department</th>
                                        <th style="background-color:#4f546c;padding:10px;">Employee Number</th>
                                        <th style="background-color:#4f546c;padding:10px;">Contact Number</th>
                                        <th style="background-color:#4f546c;padding:10px;">Security Status</th>
                                        <th style="background-color:#4f546c;padding:10px;">View</th>                                    
                                    </tr>

            @foreach($data as $l)
                                    
            <tr>
            <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('d-m-Y')}}</td>
                                        <td>{{$l->joblocation}}</td>
                                        <td>{{$l->name}}</td>
                                        <td>{{$l->desig}}</td>
                                        <td>{{$l->dept}}</td>
                                        <td>{{$l->empno}}</td>
                                        <td>{{$l->contactno}}</td>
                                        <td>{{$l->securitystatus}}</td>
                                        <td>
                                        <a href="{{url('view',$l->id)}}"><i style="color:black" class="fa fa-eye"></i></a>
                                        </td>
                                  
                                       
                                    </tr>
                               
                                    @endforeach
                               
            </table>
            {{$data->links()}}
                                  </div>


                                  </div>


                                  </div>
       
                    <!-- </table> -->
        <!--================login_part end =================-->
    </main>
</body>

    @endsection