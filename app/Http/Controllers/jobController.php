<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request; // ✅ الحل هنا
use Illuminate\Routing\Controller;
use App\Models\Employee;

class jobController extends Controller
{
    public function index(){
        $jobs = [
        ['id'=>1,'title'=>'programmer','salary'=>'10,000 $'],
        ['id'=>2,'title'=>'engineer','salary'=>'15,000 $'],
        ['id'=>1,'title'=>'Designer','salary'=>'6,000 $'],
           ];
        return view ('jobs.index' ,['jobs' => $jobs]);
    }

    public function show($jobId){
        $jobs = [
            ['id'=>1,'title'=>'programmer','salary'=>'10,000 $'],
            ['id'=>2,'title'=>'engineer','salary'=>'15,000 $'],
            ['id'=>3,'title'=>'Designer','salary'=>'6,000 $'],
             ] ;

        $job = Arr::first($jobs ,fn($job)=> $job['id']==$jobId);
        $employee=Employee::find($jobId);  // this is to connect between the job and the employee name
        if(! $job){
            abort(404);
        };
        return view('jobs.show',[
            'job' => $job,
            'employee'=>$employee
        ]);
    }
}
