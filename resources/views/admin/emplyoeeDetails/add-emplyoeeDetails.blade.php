@extends('admin.master')
@section('title')
    Add EmployeeDetails
@endsection
@section('content')
    <div class="row">
        <h5 class="text-center">{{session('message')}}</h5>
        <div class="col-xl-6 mx-auto">
            <form action="{{route('new-employeeDetails')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="employee_id" value="{{Session::get('EmplyoeeId')}}">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center ">
                                <h5 class="mb-0">EmplyoeeDetails Add Form </h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Employee Address</label>
                                <div class="col-sm-9">
                                    <textarea name="emplyoee_address" class="form-control" id="inputPhoneNo2" placeholder="Full Name"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Employee Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="employee_image" class="form-control" id="inputEmailAddress2">
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

