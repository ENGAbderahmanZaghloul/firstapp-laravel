<?php
use Livewire\Volt\Volt;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\employeesController;
use App\Models\Employee;

Route::get('/', [HomeController::class,'actionsContainer'])->name('home');

// excute page with controllers

Route::get('/dashboard' ,[DashboardController::class,'ContainerAction']

)  ->middleware(['auth', 'verified'])
    ->name('dashboard');


     /*   excute the page with callback func */
// Route::get('/dashboard' ,function() {
//      return view('dashboard', 'dashboard',['$username' => 'Abdu' , 'users' =>['abdu' , 'ahmed' , 'taha']]);


// })  ->middleware(['auth', 'verified'])
//     ->name('dashboard');

 /*  deafualt way to excute the page */
// Route::view('dashboard', 'dashboard',['$username' => 'Abdu' , 'users' =>['abdu' , 'ahmed' , 'taha']])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/posts' ,[PostsController::class,'index']

) ->name('posts.index');

Route::get('/posts/{postId}' ,[PostsController::class,'show']

) ->name('posts.show');  // ->name is ashortcut for routing

Route::get('/jobs' , [jobController::class,'index']
) ->name('jobs.index');


Route::get('/jobs/{jobId}' ,[jobController::class,'show']

) ->name('jobs.show');

Route::get('/employees' ,[employeesController::class,'index']
    ) ->name('employees.index');

Route::get('/employees/create', [employeesController::class,'create'])
    ->name('employees.create');

Route::get('/employees/{id}' ,[employeesController::class,'show']
    ) ->name('employees.show');

Route::get('/employees/{id}/employeeDetail' ,[employeesController::class,'employeeDetail']
    ) ->name('employees.employeeDetail');

Route::post('/employees',function(){
    //here we handle the validation
    request() ->validate([
        'name' => ['required','min:3','max:10'],
        'salary' => ['required','numeric'],
        'role' => ['required','min:3','max:10'],

    ] ,
    [ // here we handle the custom msg that return from request
        'name.required' =>'you should enter a name',
        'name.min' => 'name must be at least 3 characters',
        'name.max' => 'name must be at most 10 characters',
        'salary.required' =>'you should enter a salary',
        'salary.numeric' => 'salary must be a number',
        'role.required' =>'you should enter a role',
        'role.min' => 'role must be at least 3 characters',
        'role.max' => 'role must be at most 10 characters',
    ]);

    //here we handle the creation process
    Employee::create([
        'name'=> request('name'),
        'salary'=> request('salary'),
        'role'=> request('role'),
        'employee_detail_id'=> 1,
    ]);
    return redirect('employees');
});
require __DIR__.'/auth.php';
