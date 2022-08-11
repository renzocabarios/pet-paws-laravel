<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ServiceController;


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

Route::get('/signin', [ViewController::class, 'signin'])->name('signin');
Route::get('/signup', [ViewController::class, 'signup'])->name('signup');

Route::get('/service', [ViewController::class, 'service'])->name('service');
Route::get('/service/add', [ViewController::class, 'addService'])->name('service.add');
Route::get('/service/edit/{id}', [ViewController::class, 'editService'])->name('service.edit');

Route::get('/json/service', [ServiceController::class, 'get'])->name('service.data');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
