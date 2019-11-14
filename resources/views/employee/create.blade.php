@extends('layouts.app')
@section('title','Create Employee')
@section('content')
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
    <form action="{{route('employee.store')}}" method = "post">
        @csrf
        <div class="form-group">
            <label for="headshot">thumbnail:</label>
            <input type="text" name = "thumbnail" id = "thumbnail" class="form-control" required>
            </div>
        <div class="form-group">
            <label for="headshot">headshot:</label>
            <input type="text" name = "headshot" id = "headshot" class="form-control" required>
            </div>
        <div class="form-group">
        <label for="firstname">Firstname:</label>
        <input type="text" name = "firstname" id = "firstname" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="lastname">Lastname:</label>
        <input type="text" name = "lastname" id = "lastname" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" name = "department" id = "department" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="info">info:</label>
        <input type="text" name = "info" id = "info" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
    </form>
    </div>
</div>
@endsection
