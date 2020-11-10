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

// Get the data
Route::get('member', [MemberController::class, 'index']);
// Delete the member
Route::delete('member/{member}', [MemberController::class, 'destroy']);
// Edit the member
Route::get('member/{member}', [MemberController::class, 'edit']);
// Update the member
Route::match(['put', 'patch'], 'member/{member}', [MemberController::class, 'update']);
