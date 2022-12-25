<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\supervisorController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\titleBookController;
use App\Http\Controllers\titleManageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Supervisor Management Routes
Route::get('/openAddSupervisor', [supervisorController::class, 'openAddSupervisor']);
Route::get('/openViewSupervisor', [supervisorController::class, 'openViewSupervisor']);
Route::resource('/Supervisor',supervisorController::Class);

//Student Management Routes
Route::resource('/Student',studentController::Class);
Route::get('/openAddStudent', [studentController::class, 'openAddStudent']);
Route::get('/openViewStudent', [studentController::class, 'openViewStudent']);

Route::resource('/TitleBook',titleBookController::Class);

//Title Management Routes
Route::get('/openAssignSupervisor', [titleManageController::class, 'openAssignSupervisor']);
Route::get('/openViewStudentSupervisor', [titleManageController::class, 'openViewStudentSupervisor']);
Route::get('/searchExpertise', [titleManageController::class, 'searchExpertise']);
Route::resource('/TitleManage',titleManageController::Class);