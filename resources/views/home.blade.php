@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{session('msg')}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/create"><button type="button" class="btn btn-dark btn-lg">Create Employee</button></a>
                </div>
            </div>
        </div>
    </div>
    @if(count($employeeArr) > 0)
    <table class="table mt-4">
        <thead class="thead-dark table-striped">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Joining</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employeeArr as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->date_of_joining}}</td>
                <td>{{$employee->bio}}</td>
                <td> <a href="/edit/{{$employee->id}}"><button type="button"
                            class="btn btn-primary">Edit</button></a>&nbsp <a href="/emp_delete/{{$employee->id}}"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning mt-2" role="alert">
        Sorry No Posts Found!!
    </div>
    @endif
</div>
@endsection
