@extends('theme3')


@section('content')
<style>

    body {
    background: #fff;
    
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: darkred;
    box-shadow: none;
    border: display;
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

</style>

<div class="container rounded bg-white mt-5">
    <div class="row">
        <center><h3>My Profile</h3></center>
        <div style="margin-top:1%;" class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="90"><span class="font-weight-bold">{{$LoggedUserInfo->name}}</span><span class="text-black-50">{{$LoggedUserInfo->deptname}}</span><span>{{$LoggedUserInfo->empno}}</span></div>
        </div>
        <div class="col-md-8">
            
            <div style="margin-top: 5%;" class="p-3 py-5">
            <table class="table table-bordered table-justify">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a href="/Uhome"><h6>Back to home</h6></a>
                    </div>
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-right mr-1 mb-1"></i>
                    <a  id="btn" value="update"  data-toggle="modal" data-target="#exampleModalCenter"><h6>Change Password</h6></a>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/updatepassword" method="post" id="updatepassword">
            {{csrf_field()}}
            <input type="hidden" class="form-control" name="empno" value={{$LoggedUserInfo->empno}}>
            <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password">
            <input style="margin-top: 2%;" type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password">
            
          </form>
      </div>
      <div class="modal-footer">
        <button onclick="clearText()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" value="reject" class="btn btn-danger"form="updatepassword" >Update</button>
      </div>
    </div>
  </div>
</div>

                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Name" value="{{$LoggedUserInfo->name}}"></div>
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="usertype" value="{{$LoggedUserInfo->usertype}}"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Department" value="{{$LoggedUserInfo->deptname}}"></div>
                    <div class="col-md-6"><input readonly type="text" class="form-control" value="{{$LoggedUserInfo->contact}}" placeholder="Contact"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Employee Number" value="{{$LoggedUserInfo->empno}}"></div>
                </div>
            
                <!-- <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div> -->
            </div>
        </div>
    </div>
</div>
</table>
<script>
function clearText(){
    document.getElementById('NewPassword').value ='';
    document.getElementById('ConfirmPassword').value ='';
}
</script>
@endsection