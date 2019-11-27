@extends('layouts.app')
@section('title','Employee details')
@section('content')

<div class="jumbotron card card-image mt-4 rare-wind-gradient" style="height:100%;">
<div class="text-white text-center row">

<div class="col">
    <img style="border-radius:50%;" src="{{ URL::to('/') }}/images/{{ $employee->headshot }}">
    </div>
    <div class="col">

    <h1>{{ $employee->firstname }} {{ $employee->lastname }}</h1>
    <hr>
    <h4 class="text-left"><b>Employee ID Number:</b>  {{ $employee->id }}</h4>
    <h4 class="text-left"><b>Department:</b> {{ $employee->department }}</h4>
    <h4 class="text-left"><b>Information:</b> {{ $employee->info }}</h4>

    </div>

</div><div class="container justify-content-center text-center"><a onclick="goBack()" class="text-white btn spring-warmth-gradient btn-lg"> Go back</a><div>
</div>

<script>
function goBack() {
window.history.back();
}
</script>

@endsection
