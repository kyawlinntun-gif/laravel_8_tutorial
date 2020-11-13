<?php

use App\Http\Controllers\MemberController;
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

// Query Builder

Route::get('/member', [MemberController::class, 'dbOperation']);

// Aggregate method

Route::get('/list', [MemberController::class, 'aggregate']);

// Joins

Route::get('/join', [MemberController::class, 'join']);