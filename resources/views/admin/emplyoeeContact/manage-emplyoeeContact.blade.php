@extends('admin.master')
@section('title')
    Manage EmployeeContact
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
                        <th>Emplyoee Contact Name</th>
                        <th>Emplyoee Contact Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($emplyoeeContact as $employee)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->contact_name}}</td>
                            <td>{{$employee->contact_email}}</td>
                            <td>
                                <a href="{{route('edit-employeeContact',['id'=>$employee->employee_id])}}" title="Edit" class="btn btn-success">Edit</a>
                                <form action="{{route('delete-employeeContact')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="employee_id" value="{{$employee->id}}">
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


