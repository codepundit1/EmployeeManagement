<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Psy\CodeCleaner\FunctionContextPass;

class EmployeeController extends Controller
{
    //Home
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $data =  Employee::all();
        return view('employeeList', ['data'=> $data]);
    }

    public function addEmp(Request $req)
    {
        $employee = new Employee();
        $employee->name=$req->input('name');
        $employee->email=$req->input('email');
        $employee->phone=$req->input('phone');
        $employee->save();
        Session()->flash('status', 'Employee Added Successfully');

        return redirect('list');
    }

    public function delete($id)
    {
        // return Employee::find($id);
        $data = Employee::find($id);
        $data->delete();
        Session()->flash('status', 'Employee Deleted Successfully');
        return redirect('list');
    }

    public function show($id)
    {
        $data = Employee::find($id);
        return view('edit', ['data' => $data]);
    }



}
