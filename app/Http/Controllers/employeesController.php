<?php

namespace App\Http\Controllers;
use App\Models\Employee; // ✅ الحل هنا
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class employeesController extends Controller
{
    public function index(){
        // $employees = [
        //         ['id'=>1,'name'=>'Abdulrahman','salary'=>'10,000 $'],
        //         ['id'=>2,'name'=>'Ahmed','salary'=>'15,000 $'],
        //         ['id'=>1,'name'=>'Mohamed','salary'=>'6,000 $'],
        // ];
        $employees = Employee::all();
        return view('employees.index' , ['employees' => $employees]);
    }
    
    public function show($id){
        // $employees = [
        //         ['id'=>1,'name'=>'Abdulrahman','salary'=>'10,000 $'],
        //         ['id'=>2,'name'=>'Ahmed','salary'=>'15,000 $'],
        //         ['id'=>1,'name'=>'Mohamed','salary'=>'6,000 $'],
        // ];

        // $employee = Arr::first($employees,fn($employee)=>$employee['id'] == $id);
        $employee = Employee::find($id);
        if(! $employee){
            abort(404);
        };
        return view('employees.show' , ['employee' => $employee]);
    }
}
