@extends('layouts.app')
@section('title','Employees Index')
@section('content')

<body style="background-color: #ffffff;
background-image: url('https://www.transparenttextures.com/patterns/gplay.png');">

<div class="jumbotron card card-image mt-4" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
<div class="text-white text-center py-5 px-4">

    <h1 class="display-1 card-title h1-responsive pt-3 mb-5 font-bold"><strong>MVC Employees</strong></h1>

    <a href="employees/create" class="btn btn-outline-white btn-md"><i class="fas fa-plus left"></i> Create New Employee</a>

    @include('partials.search')

</div>
</div>


<div class="jumbotron jumbotron-fluid" style="text-align:center;background-color:#ffffff;">



<table class="table table-striped table-responsive-md btn-table">
                <thead>
                    <tr>
                        <th scope="row">Headshot</th>
                        <th scope="row">Full Name</th>
                        <th scope="row">Department</th>
                        <th scope="row">Details</th>
                        <th scope="row">Edit/Delete</th>

                    </tr>
                </thead>
                <tbody>
            @foreach($employees as $employee)
                    <tr>
                        <td class="wow fadeIn"><img style="border-radius:50%;" src="{{ URL::to('/') }}/images/{{ $employee->thumbnail }}"></td>


                        <td class="wow fadeIn">

                        {{ $employee->firstname }} {{ $employee->lastname }}
                        </td>


                        <td class="wow fadeIn">

                        {{ $employee->department }}

                        </td>

                        <td class="wow fadeIn"><a href="{{route('employee.details',['id'=>$employee->id])}}"
                                class="btn btn-info btn-block">Details</a></td>


                        <td class="wow fadeIn"><a href="{{route('employee.edit',['id'=>$employee->id])}}"
                                class="btn btn-info btn-sm">Edit</a>

                            <a href="{{route('employee.destroy',['id'=>$employee->id])}}"
                                class="btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
</div>


@endsection
