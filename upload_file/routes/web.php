<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadsController;

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

// Upload File Page
Route::view('upload', 'upload');

// Store File
Route::post('upload',[UploadsController::class, 'store']);
