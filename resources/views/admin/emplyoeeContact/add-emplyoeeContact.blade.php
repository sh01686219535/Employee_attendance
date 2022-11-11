@extends('admin.master')
@section('title')
    Add EmployeeContact
@endsection
@section('content')
    <div class="row">
        <h5 class="text-center">{{session('message')}}</h5>
        <div class="col-xl-6 mx-auto">
            <form action="{{route('new-employeeContact')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="employee_id" value="{{Session::get('EmplyoeeId')}}">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center ">
                                <h5 class="mb-0">EmplyoeeContact Add Form </h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Contact Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="contact_name" class="form-control" id="inputPhoneNo2" placeholder="Contact Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Contact Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="contact_email" class="form-control" id="inputEmailAddress2" placeholder="Contact Email">
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


