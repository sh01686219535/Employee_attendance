@extends('admin.master')
@section('title')
    Manage EmployeeDetails
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Emplyoee Name</th>
                        <th>Emplyoee Address</th>
                        <th>Emplyoee Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($emplyoeeDetails as $employees)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$employees->id}}</td>
                            <td>{{$employees->emplyoee_address}}</td>
                            <td>
                                <img src="{{asset($employees->employee_image)}}" style="width:50px;height:50px;"alt="">
                            </td>
                            <td>
                                <a href="{{route('edit-employeeDetails',['id'=>$employees->id])}}" title="Edit" class="btn btn-success">Edit</a>
                                <form action="{{route('delete-employeeDetails')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="employee_id" value="{{$employees->id}}">
                                    <input type="submit" value="Delete" title="Delete" class="btn btn-danger" onclick="return confirm('Are you delete this')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

