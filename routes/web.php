<?php
use App\Http\Controllers\EmployeeController;
use App\Services;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'EmployeeController@getEmployees');
Route::get('/create', 'EmployeeController@create');
Route::get('/edit/{id}', 'EmployeeController@getEmployee');
Route::post('/emp_submit', 'EmployeeController@createEmployee');
Route::get('/emp_delete/{id}', 'EmployeeController@deleteEmployee');
Route::post('/emp_update/{id}', 'EmployeeController@updateEmployee')->name('employee.update');
