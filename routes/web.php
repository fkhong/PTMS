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

Route::resource('/Supervisor',supervisorController::Class);
Route::resource('/Student',studentController::Class);
Route::resource('/TitleBook',titleBookController::Class);
Route::resource('/TitleManage',titleManageController::Class);