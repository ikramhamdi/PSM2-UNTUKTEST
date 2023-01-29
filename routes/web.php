<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ManagerController;
use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

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




Route::resource('staffs','App\Http\Controllers\StaffController');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

//auth route for both
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
//for staff
Route::group(['middleware' => ['auth', 'role:staff']], function () {
    Route::get('/dashboard/managePatient', 'App\Http\Controllers\DashboardController@managePatient')->name('dashboard.managePatient');
    Route::get('/dashboard/managePatient', 'App\Http\Controllers\PatientController@index')->name('dashboard.managePatient');
    Route::post('/dashboard/managePatient', 'App\Http\Controllers\PatientController@store')->name('patients.store');
    Route::get('/dashboard/managePatient/create', 'App\Http\Controllers\PatientController@create')->name('patients.create');
    Route::get('/dashboard/managePatient/show/{id}', 'App\Http\Controllers\PatientController@show')->name('patients.show');
    Route::patch('/dashboard/managePatient/update/{id}', 'App\Http\Controllers\PatientController@update')->name('patients.update');
    Route::delete('/dashboard/managePatient/delete/{id}', 'App\Http\Controllers\PatientController@destroy')->name('patients.destroy');
    Route::get('/dashboard/managePatient/{id}/edit','App\Http\Controllers\PatientController@edit')->name('patients.edit'); 
   
});

//for manager
Route::group(['middleware' => ['auth', 'role:manager']], function () {
    Route::get('/dashboard/manageStaff', 'App\Http\Controllers\DashboardController@manageStaff')->name('dashboard.manageStaff');
    Route::get('/dashboard/manageStaff', 'App\Http\Controllers\ManagerController@index')->name('dashboard.manageStaff');
    Route::post('/dashboard/manageStaff', 'App\Http\Controllers\ManagerController@store')->name('staffs.store');
    Route::get('/dashboard/manageStaff/create', 'App\Http\Controllers\ManagerController@create')->name('staffs.create');
    Route::get('/dashboard/manageStaff/show/{id}', 'App\Http\Controllers\ManagerController@show')->name('staffs.show');
    Route::patch('/dashboard/manageStaff/update/{id}', 'App\Http\Controllers\ManagerController@update')->name('staffs.update');
    Route::delete('/dashboard/manageStaff/delete/{id}', 'App\Http\Controllers\ManagerController@destroy')->name('staffs.destroy');
    Route::get('/dashboard/manageStaff/{id}/edit','App\Http\Controllers\ManagerController@edit')->name('staffs.edit'); 
});

Route::middleware('auth')->group(function () {
    Route::resource("/patient", PatientController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
