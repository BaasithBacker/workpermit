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
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="" width="90"><span class="font-weight-bold">{{$LoggedUserInfo->name}}</span><span class="text-black-50">{{$LoggedUserInfo->deptname}}</span><span>{{$LoggedUserInfo->empno}}</span></div>
        </div>
        <div class="col-md-8">
            
            <div class="p-3 py-5">
            <table class="table table-bordered table-justify">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Name" value="{{$LoggedUserInfo->name}}"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Department" value="{{$LoggedUserInfo->deptname}}"></div>
                    <div class="col-md-6"><input readonly type="text" class="form-control" value="{{$LoggedUserInfo->contact}}" placeholder="Contact"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input readonly type="text" class="form-control" placeholder="Employee Number" value="{{$LoggedUserInfo->empno}}"></div>
                </div>
            
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
            </div>
        </div>
    </div>
</div>
</table>

@endsection