@extends('admin.master')
@section('title')
    Edit Employee
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <form action="{{route('update-employee')}}" method="post">
                @csrf
                <input type="hidden" name="employee_id" value="{{$employee->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center ">
                                <h5 class="mb-0">Emplyoee update Form </h5>
                                <h5 class="text-center">{{session('message')}}</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="first_name" value="{{$employee->first_name}}" class="form-control" id="inputEnterYourName" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="full_name" value="{{$employee->full_name}}" class="form-control" id="inputPhoneNo2" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{$employee->email}}" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" value="{{$employee->password}}"class="form-control" id="inputChoosePassword2" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit" value="Submit" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

