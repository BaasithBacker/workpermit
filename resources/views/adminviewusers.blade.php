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

    <form class="d-flex" action="/adminviewusers" method="POST">
        {{ csrf_field() }}
        
                                 
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="text" name="searchname"  placeholder="Search here" class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <button class="btn btn-danger">Search</button>
                                <a style="font-size:24px;" href="/adminviewusers"><i class="fa fa-refresh"></i></a>

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                </div>
      </form>
      


    <div class="col-lg-12 col-xl-12 col-md-12">
        <br> <br><table id="chacko" class="table">
          

        <tr>
        <th style="background-color:#4f546c;">Employee Number</th> 
                                        <th style="background-color:#4f546c;">Name</th>
                                        <th style="background-color:#4f546c;">Contact Number</th>
                                        <th style="background-color:#4f546c;">Department Name</th>
                                        <th style="background-color:#4f546c;">Designation</th>
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
                                        <td>{{$l->usertype}}</td>                                                                              
                                        <td>
                                        <a  href="{{url('medit',$l->empno)}}"><i style="color:black" class="fas fa-pencil-alt"></i></a>
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