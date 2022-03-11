@extends('theme3')


@section('content')
<style>
      th{
        padding: 1rem 2rem;
        letter-spacing: 0.03rem;
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
<center><h3>User's</h3></center>  

    <form class="d-flex" action="report" method="POST">
        {{ csrf_field() }}
      </form>
      


    <div class="col-lg-12 col-xl-12 col-md-12">
        <br> <br><table id="chacko" class="table">
          

        <tr>
        <th style="background-color:#4f546c;">Employee Number</th> 
                                        <th style="background-color:#4f546c;">Name</th>
                                        <th style="background-color:#4f546c;">Contact Number</th>
                                        <th style="background-color:#4f546c;">Department Name</th>
                                          
                                        <th style="background-color:#4f546c;">Edit</th>                            
                                    </tr>

            @foreach($data as $l)
                   @if($l->usertype=='Admin')
                   @else                 
            <tr>
            <td>{{$l->empno}}</td>
                                        <td>{{$l->name}}</td>
                                        <td>{{$l->contact}}</td>
                                        <td>{{$l->deptname}}</td>                                       
                                        <td>
                                        <a id="btn" value="EDIT" class="btn btn-danger" href="{{url('medit',$l->empno)}}">Edit</a>
                                        </td>
                                       
                                    </tr>
                               @endif
                                    @endforeach
                               
            </table>
            {{$data->links()}}
                                  </div>


                                  </div>


                                  </div>
    

        
       
  
    </main>
</body>

    @endsection