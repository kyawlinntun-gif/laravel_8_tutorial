<?php

use App\Http\Controllers\MultiDatabaseController;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Route;


Route::get('samplemail', function(){
    return new SampleMail;
});

// MultiDatabaseController
Route::get('/', [MultiDatabaseController::class, 'index']);
