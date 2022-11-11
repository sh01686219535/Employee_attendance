@extends('admin.master')
@section('title')
    EmployeeAttendance Update
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('update-attendance')}}" method="post">
                        @csrf
                        <input type="hidden" name="emplyoee_id" value="{{$emplyoee->id}}">
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
                                        <td>{{$emplyoee->full_name}}</td>
                                        <td>
                                            @if(Session::get('EmplyoeeId'))
                                                <a >{{Session::get('EmplyoeeDate')}}</a>
                                                <a >{{ date('H:i:s') }}</a>
                                            @else
                                                <p>Need date</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <input type="submit" value="Update" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
