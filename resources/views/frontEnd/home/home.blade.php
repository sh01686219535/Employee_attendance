@extends('frontEnd.master')
@section('title')
    Emplyoee Attandance System
@endsection
@section('content')
    <section class="py-5 sec-1">
        <div class="row mlr">
            <div class="col-md-3 margin">
                <a href="#" id="ancor-1" class="btn btn-success inline"> Emplyoee Attandance</a>
            </div>
        </div>
        <div class="row mlr">
            <div class="col-md-3 margin">
                <h2 class="text-center">{{session('message')}}</h2>
                <form action="{{route('emplyoee-login')}}" id="form" method="post" class="form1">
                    @csrf
                    <h2 class="text-center font-h2">Employee Login</h2>
                    <label for="email" class="py-2">Email Address</label>
                    <input type="email" id="email" name="user_name" class="form-control" placeholder="Email Address">
                    <label for="password" class="py-2">Password</label>
                    <input type="password" id="password"name="password" class="form-control" placeholder="Password">
                    <label for="sub" class="py-2"></label>
                    <input type="submit" value="Login" id="sub"class="form-control btn btn-success">
                </form>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container width">
            <img src="{{asset('frontEndAsset')}}/assets/image/corporate-office.jpg" alt="crporate" width="100%" height="500">
        </div>
    </section>
@endsection
