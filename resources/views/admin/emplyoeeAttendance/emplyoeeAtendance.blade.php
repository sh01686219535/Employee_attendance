@extends('admin.master')
@section('title')
   EmployeeAttendance
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Employee Name</th>
                                    <th>Login Date and Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($emplyoee as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>
                                        @if(Session::get('EmplyoeeId'))
                                            <a >{{Session::get('EmplyoeeDate')}}</a>
{{--                                            <a >{{ date('H:i:s') }}</a>--}}
                                        @else
                                            <p>Need date</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('edit-attendance',['id'=>$item->id])}}" title="Edit" class="btn btn-primary">Edit</a>
                                        <form action="{{route('delete-attendance')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="emplyoee_id" value="{{$item->id}}">
                                            <input type="submit" value="Delete" title="Delete" class="btn btn-danger" onclick="return confirm('Are you sure delete this')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
