<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees =Employee::all();
        return view('employee.index',['employees'=>$employees]);
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
            $employee =new Employee();
            $employee->firstname=$request->input('firstname');
            $employee->lastname=$request->input('lastname');
            $employee->department=$request->input('department');
            $employee->phone=$request->input('phone');
            $employee->save();
            return redirect()->route('employees.index')->with('info','Employee Added Successfully');
    }
    public function edit($id)
    {
        $employee =Employee::find($id);
        return view('employee.edit',['employee'=>$employee]);
    }
    public function update(Request $request)
    {
        $employee =Employee::find($request->input('id'));
        $employee->firstname=$request->input('firstname');
        $employee->lastname=$request->input('lastname');
        $employee->department=$request->input('department');
        $employee->phone=$request->input('phone');
        $employee->save();
        return redirect()->route('employees.index')->with('info','Employee Updated Successfully');
    }
    public function destroy($id)
    {
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }


}
