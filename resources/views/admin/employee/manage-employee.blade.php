@extends('admin.master')
@section('title')
    Manage Employee
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>First Name</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->full_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->status==1?'Published':'Unpublished'}}</td>
                                <td>
                                    @if($employee->status==1)
                                        <a href="{{route('status',['id'=>$employee->id])}}" class="btn btn-danger">Unpublished</a>
                                    @else
                                        <a href="{{route('status',['id'=>$employee->id])}}" class="btn btn-primary">Published</a>
                                    @endif
                                        <a href="{{route('edit-employee',['id'=>$employee->id])}}" title="Edit" class="btn btn-success">Edit</a>
                                        <form action="{{route('delete-employee')}}" method="post">
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
