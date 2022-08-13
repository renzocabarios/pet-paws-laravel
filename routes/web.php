<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/consultation', function () {
    return view('consultation');
});
Route::get('/addpet', function () {
    return view('addpet');
});
Route::get('/petprofile', function () {
    return view('petprofile');
});
Route::get('/receipt', function () {
    return view('receipt');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/signin', [ViewController::class, 'signin'])->name('signin');
Route::get('/signup', [ViewController::class, 'signup'])->name('signup');
Route::post('/signin', [UserController::class, 'authUser'])->name('user.auth');
Route::post('/signup', [CustomerController::class, 'store'])->name('customer.store');

Route::get('/service', [ViewController::class, 'service'])->name('service');
Route::get('/service/add', [ViewController::class, 'addService'])->name('service.add');
Route::get('/service/edit/{id}', [ViewController::class, 'editService'])->name('service.edit');

Route::get('/json/service', [ServiceController::class, 'get'])->name('service.data');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');

Route::get('/customer', [ViewController::class, 'customer'])->name('customer');
Route::get('/json/customer', [CustomerController::class, 'get'])->name('customer.data');
Route::post('/customer/import', [CustomerController::class, 'import'])->name('customer.import');
Route::get('/customer/export', [CustomerController::class, 'export'])->name('customer.export');
Route::get('/customer/deactivate/{id}', [CustomerController::class, 'deactivate'])->name('customer.deactivate');
Route::get('/customer/activate/{id}', [CustomerController::class, 'activate'])->name('customer.activate');

Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
Route::post('/profile/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/pet/add', [ViewController::class, 'addPet'])->name('pet.add');
Route::post('/pet/store', [PetController::class, 'store'])->name('pet.store');

Route::get('/pet/edit/{id}', [ViewController::class, 'editPet'])->name('pet.edit');
Route::post('/pet/update/{id}', [PetController::class, 'update'])->name('pet.update');
Route::get('/pet/delete/{id}', [PetController::class, 'destroy'])->name('pet.delete');

Route::get('/pet', [ViewController::class, 'pet'])->name('pet');
Route::get('/json/pet', [PetController::class, 'get'])->name('pet.data');

Route::get('/employee', [ViewController::class, 'employee'])->name('employee');
Route::get('/employee/add', [ViewController::class, 'addEmployee'])->name('employee.add');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/position/{id}', [ViewController::class, 'edit_position'])->name('employee.edit_position');
Route::post('/employee/position/{id}', [EmployeeController::class, 'change_position'])->name('employee.change_position');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
Route::get('/json/employee', [EmployeeController::class, 'get'])->name('employee.data');
Route::post('/employee/import', [EmployeeController::class, 'import'])->name('employee.import');
Route::get('/employee/export', [EmployeeController::class, 'export'])->name('employee.export');
