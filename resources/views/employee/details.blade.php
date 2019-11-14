@extends('layouts.app')
@section('title','Employee details')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <tr class = "text-center">
            <td>{{ $employee->id }}</td>

            <td><img src="{{ URL::to('/') }}/images/{{ $employee->headshot }}"></td>
            <td>{{ $employee->firstname }}</td>

            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->info }}</td>
        </tr>
    </div>
</div>
@endsection
