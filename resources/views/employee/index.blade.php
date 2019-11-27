@extends('layouts.app')
@section('title','Employees Index')
@section('content')

<body>

<div class="jumbotron card card-image mt-4 rare-wind-gradient">
<div class="text-white text-center py-5 px-4">

    <h1 class="display-4 font-bold">MVC Employees</h1>
<br>
    <a href="employees/create" class="btn spring-warmth-gradient btn-lg"><i class="fas fa-plus left"></i> Create New Employee</a>

    @include('partials.search')

</div>
</div>


<div class="jumbotron jumbotron-fluid" style="text-align:center;background-color:#ffffff;">



<table class="table table-striped table-responsive-md btn-table">
                <thead>
                    <tr>
                        <th scope="row"><h4>Headshot</h4></th>
                        <th scope="row"><h4>Full Name</h4></th>
                        <th scope="row"><h4>Department</h4></th>
                        <th scope="row"><h4>Details</h4></th>
                        <th scope="row"><h4>Edit/Delete</h4></th>

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
                                class=" btn btn-light  ">Details</a></td>


                        <td class="wow fadeIn"><a href="{{route('employee.edit',['id'=>$employee->id])}}"
                                class="text-white btn winter-neva-gradient btn-sm">Edit</a>

                            <a href="{{route('employee.destroy',['id'=>$employee->id])}}"
                                class="text-white btn btn-danger btn-sm">Delete</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
</div>


@endsection
