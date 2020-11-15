<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\MembersController;
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

// Accessor
Route::get('/members', [MembersController::class, 'index']);

// One to One
Route::get('/comment', [CommentController::class, 'index']);

// One to Many
Route::get('/employee', [EmployeeController::class, 'index']);

// Fluent String
Route::get('/fluent', [FluentController::class, 'index']);

// Route Model Binding
Route::get('/company/{company:c_name}', [CompanyController::class, 'index']);