<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PetController;

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
Route::get('/customer/deactivate/{id}', [CustomerController::class, 'deactivate'])->name('customer.deactivate');
Route::get('/customer/activate/{id}', [CustomerController::class, 'activate'])->name('customer.activate');

Route::get('/profile', [ViewController::class, 'profile'])->name('profile');
Route::post('/profile/update/{id}', [UserController::class, 'update'])->name('user.update');


Route::get('/pet/add', [ViewController::class, 'addPet'])->name('pet.add');
Route::post('/pet/store', [PetController::class, 'store'])->name('pet.store');


