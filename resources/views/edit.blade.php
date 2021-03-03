@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/home" class="btn btn-outline-dark">Go Back</a>
    <h1 class="text-center pb-4">Update Employee</h1>
    <form method="post" action="{{route('employee.update',[$employeeArr->id])}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputname4">Name</label>
                <input type="text" name="name" value="{{$employeeArr->name}}" class="form-control" id="inputname4"
                    placeholder="name" required="true">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" value="{{$employeeArr->email}}" class="form-control" id="inputEmail4"
                    placeholder="Email" required="true">
            </div>
            <div class="form-group col-md-4">
                <label for="example-date-input">Date of Joining</label>
                <input class="form-control" type="date" name="date_of_joining" value="{{$employeeArr->date_of_joining}}" id="example-date-input">

            </div>
            <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Bio</label>
                <textarea class="form-control" name="bio" id="exampleFormControlTextarea1"
                    rows="3"> {{$employeeArr->bio}}</textarea>
            </div>
        </div>
        <div class="text-center pt-2">
            <button type="submit" class="btn btn-primary btn-lg w-50 ">Update</button>
        </div>
    </form>
</div>
@endsection
