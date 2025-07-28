<?php
use Livewire\Volt\Volt;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\employeesController;

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

Route::get('/employees/{id}' ,[employeesController::class,'show']
    ) ->name('employees.show');
Route::get('/employees/{id}/employeeDetail' ,[employeesController::class,'employeeDetail']
    ) ->name('employees.employeeDetail');

require __DIR__.'/auth.php';
