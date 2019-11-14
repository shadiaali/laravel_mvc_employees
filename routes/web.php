<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home view
Route::get('/', function () {
    return view('welcome');
})->name('home');

//GET request routes
//if the route is triggered than the 'index' of the employee controller will be called
Route::get('employees','EmployeeController@index')->name('employee.index');
// the id parameter is essential to selecting a specific resource
Route::get('employees/{id}/details','EmployeeController@details')->name('employee.details');
Route::get('employees/{id}/edit','EmployeeController@edit')->name('employee.edit');
Route::get('employees/{id}/delete','EmployeeController@destroy')->name('employee.destroy');
Route::get('employees/create','EmployeeController@create')->name('employee.create');

//POST request routes
Route::post('employees/create','EmployeeController@store')->name('employee.store');
Route::post('employees/update','EmployeeController@update')->name('employee.update');
