@extends('theme3')


@section('content')

<style>
      th{
     
        
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
<center><h3>Report's</h3></center>  

    <form class="d-flex" action="/adminreportsview" method="POST">
        {{ csrf_field() }}
      
   
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="date" name="date1" class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="date" name="date2" class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <button class="btn btn-danger">Search</button>
                                </div>   
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="text" name="searchname"  placeholder="Search here" class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                <button class="btn btn-danger" >Search</button>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                </div> 
                                </form>

                                
    <div class="col-lg-12 col-xl-12 col-md-12">
        <br> <br><table id="chacko" class="table table-responsive">

        <tr>
        <th style="background-color:#4f546c;">Permit Number</th>
                                        <th style="background-color:#4f546c;">Date Of Issued</th>
                                        <th style="background-color:#4f546c;">Location</th>
                                        <th style="background-color:#4f546c;">Name Of Requestor</th>
                                        <th style="background-color:#4f546c;">Department</th>
                                        <th style="background-color:#4f546c;">Employee Number</th>
                                        <th style="background-color:#4f546c;">Contact Number</th>
                                        <th style="background-color:#4f546c;">SecurityStatus</th>  
                                        <th style="background-color:#4f546c;">MaintenanceStatus</th>
                                        <th style="background-color:#4f546c;">SafetyStatus</th> 
                                        <th style="background-color:#4f546c;">View</th>                              

                                    </tr>

            @foreach($data as $l)
                                    
            <tr>
            <td>{{$l->id}}</td>
                                        <td>{{ Carbon\Carbon::parse($l->date)->format('d-m-Y')}}</td>
                                        <td>{{$l->joblocation}}</td>
                                        <td>{{$l->name}}</td>
                                        <td>{{$l->dept}}</td>
                                        <td>{{$l->empno}}</td>
                                        <td>{{$l->contactno}}</td>
                                        <td>{{$l->securitystatus}}</td>       
                                        <td>{{$l->maintanancestatus}}</td>
                                        <td>{{$l->safetystatus}}</td>
                                       
                                        
                                        <td>
                                            <a id="btn" value="view" class="btn btn-primary" href="{{url('arview',$l->id)}}">View</a>
                                        </td>
                                  
                                       
                                    </tr>
                               
                                    @endforeach
                               
            </table>
            
            {{$data->links()}}
                                  </div>


                                  </div>


                                  </div>
    </body>
    </main>

<script type="text/javascript" src="src/jspdf.min.js"></script>

<script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="src/tableHTMLExport.js"></script>

<script type="text/javascript">
  
  $("#json").on("click",function(){
    $("#example").tableHTMLExport({
      type:'json',
      filename:'bookingreport.json'
    });
  });

  $("#pdf").on("click",function(){
    $("#chacko").tableHTMLExport({
      type:'pdf',
      filename:'bookingreport.pdf',
	  orientation:'landscape'
    });
  });

  $("#csv").on("click",function(){
    $("#example").tableHTMLExport({
      type:'csv',
      filename:'bookingreport.csv'
    });
  });
</script>
        
                    

    @endsection