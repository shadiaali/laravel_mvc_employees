@extends('layouts.app')
@section('title','Edit Employee')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <form action="{{route('employee.update')}}" method = "post">
        @csrf

        <input type="hidden" name="headshot" value = "{{$employee->headshot}}">
        <div class="form-group">
        <label for="firstname">Firstname:</label>
        <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$employee->firstname}}">
        </div>
        <div class="form-group">
        <label for="lastname">Lastname:</label>
        <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$employee->lastname}}">
        </div>
        <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" name = "department" id = "department" class="form-control" required value = "{{$employee->department}}">
        </div>
        <div class="form-group">
        <label for="info">info:</label>
        <input type="text" name = "info" id = "info" class="form-control" required value = "{{$employee->info}}">
        </div>
        <input type="hidden" name="id" value = "{{$employee->id}}">
        <button type = "submit" class = "btn btn-success">Submit</button>
    </form>
    </div>
</div>
@endsection
