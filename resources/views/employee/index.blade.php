@extends('layouts.app')
@section('title','Employees Index')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <a href="employees/create">Create new employee</a>
    <table class="table">
        <tr>
        <th>ID</th>
        <th>thumbnail</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department</th>
        </tr>
        @foreach($employees as $employee)
        <tr class = "text-center">
            <td>{{ $employee->id }}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $employee->thumbnail }}"></td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->department }}</td>
            <td><a href="{{route('employee.edit',['id'=>$employee->id])}}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{route('employee.details',['id'=>$employee->id])}}" class = "btn btn-info">Details</a></td>
            <td><a href="{{route('employee.destroy',['id'=>$employee->id])}}" class = "btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
