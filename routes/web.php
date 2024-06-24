<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentsLogsController;
use App\Models\StudentsModel;
use App\Models\User;

// migrate db tables
Route::get('/migrate', function(){Artisan::call('migrate');dd('Migrations Done!');});

//Clear config cache:
Route::get('/config-cache', function() {Artisan::call('config:cache');return 'Config cache cleared';}); 

// Clear application cache:
Route::get('/clear-cache', function() {Artisan::call('cache:clear');return 'Application cache cleared';});

// Clear view cache:
Route::get('/view-clear', function() {Artisan::call('view:clear');return 'View cache cleared';});

 //Clear route cache:
Route::get('/route-cache', function() {Artisan::call('route:cache');return 'Routes cache cleared';});



Route::get('/', function () {return view('auth.login');});

Route::get('/dashboard', function () {
    // return view('/components/dashboard');
    $data = StudentsModel::latest()->get();
    $total = StudentsModel ::count();
    $supervisors = User::where('role','Supervisor')->get(['id','name']);

        // return $supervisors;
    return view('components/Students/Index',[
        'data'=>$data,'total'=>$total,
        'supervisors'=>$supervisors
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


// Get Ajax Data
Route::get('/students/data/{id}', [StudentsController::class, 'getAjaxData']);
Route::get('/students/logs/data/{id}', [StudentsLogsController::class, 'getAjaxData']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('students', StudentsController::class);
    Route::resource('students-logs', StudentsLogsController::class);

});

require __DIR__.'/auth.php';
