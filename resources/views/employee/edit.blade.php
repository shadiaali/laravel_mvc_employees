@extends('layouts.app')
@section('title','Edit Employee')
@section('content')
<div class="jumbotron card card-image mt-4 rare-wind-gradient wow fadeInRight"><div class="form-group wow fadeInRight md-form md-bg form-lg">
<div class="row ">
    <div class="col-sm-8 offset-sm-2"><h1 class="text-white display-4">Edit Employee</h1><br>
    <form action="{{route('employee.update')}}" method = "post">
        @csrf

        <input type="hidden" name="thumbnail" value = "{{$employee->thumbnail}}">
        <input type="hidden" name="headshot" value = "{{$employee->headshot}}">
        <div class="form-group">

        <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "{{$employee->firstname}}">
        </div>
        <div class="form-group">
        <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "{{$employee->lastname}}">
        </div>
        <div class="form-group">
        <input type="text" name = "department" id = "department" class="form-control" required value = "{{$employee->department}}">
        </div>
        <div class="form-group">
        <input type="text" name = "info" id = "info" class="form-control" required value = "{{$employee->info}}">
        </div>
        <input type="hidden" name="id" value = "{{$employee->id}}">
        <button type = "submit" class = "btn btn-success">Submit</button>
    </form><br><hr>
    <div class="container justify-content-center text-center"><a onclick="goBack()" class="text-white btn spring-warmth-gradient btn-lg"> Go back</a><div>
</div>

<script>
function goBack() {
window.history.back();
}
</script>
    </div>
</div></div></div>
@endsection
