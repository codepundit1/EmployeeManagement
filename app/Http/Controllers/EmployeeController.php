<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

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
        return Employee::all();
    }
}
