<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;



class EmployeeController extends Controller
{

    //get all employees on the index
    public function index()
    {
        //Show all employees from the database and return to view
        $employees = Employee::all();
        return view('employee.index',['employees'=>$employees]);
    }


    //return create employee view
    public function create()
    {
        return view('employee.create');
    }


    //store newly created employee
    public function store(Request $request)
    {
        //put new employee in db
        //form data is available in the request object
        $employee = new Employee();
        //get the value of input with the name specified
        $employee->headshot = $request->input('headshot');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->department = $request->input('department');
        $employee->info = $request->input('info');
        $employee->save();
        return redirect()->route('employee.index')->with('info','Employee Added Successfully');
    }


    //employee details
    public function details($id)
    {
        $employee = Employee::find($id);
        return view('employee.details',['employee'=> $employee]);
    }


    //employee edit
    public function edit($id)
    {
        //Find the employee
        $employee = Employee::find($id);
        return view('employee.edit',['employee'=> $employee]);
    }



    //update employee
    public function update(Request $request)
    {
        //find the employee in db and then update
        $employee = Employee::find($request->input('id'));
        $employee->headshot = $request->input('headshot');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->department = $request->input('department');
        $employee->info = $request->input('info');
        $employee->save();
        return redirect()->route('employee.index')->with('info','Employee Updated Successfully');
    }


    //delete employee
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
