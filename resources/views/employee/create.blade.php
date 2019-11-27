@extends('layouts.app')
@section('title','Create Employee')
@section('content')
<div class="jumbotron card card-image mt-4 rare-wind-gradient wow fadeInRight">
<div class="row mt-5">
    <div class="wow fadeInRight col-sm-8 offset-sm-2 "><h1 class="display-4 fadeInRight text-white">Create New Employee</h1>
    <form class="action="{{route('employee.store')}}" method = "post">
        @csrf
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
            <label for="thumbnail">Thumbnail path:</label>
            <input type="text" name = "thumbnail" id = "thumbnail" class="form-control form-control-lg" placeholder = "try person11-th.png" required>
            </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
            <label for="headshot">headshot path:</label>
            <input type="text" name = "headshot" id = "headshot" class="form-control form-control-lg" placeholder = "try person1.png"required>
            </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="firstname">First name:</label>
        <input type="text" name = "firstname" id = "firstname" class="form-control form-control-lg" required>
        </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="lastname">Last name:</label>
        <input type="text" name = "lastname" id = "lastname" class="form-control form-control-lg" required>
        </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="department">Department:</label>
        <input type="text" name = "department" id = "department" class="form-control form-control-lg" required>
        </div>
        <div class="form-group wow fadeInRight md-form md-bg form-lg">
        <label for="info">Information:</label>
        <input type="text" name = "info" id = "info" class="form-control form-control-lg" required>
        </div>
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
</div></div>
@endsection
