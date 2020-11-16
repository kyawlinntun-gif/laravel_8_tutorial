<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Member;
use App\Models\Member2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MultiDatabaseController extends Controller
{
    public function index()
    {
        // DB connection

        // return DB::table('members')->get();
        // return DB::connection('mysql2')->table('members')->get();

        // Model

        // return Company::all();
        // return Member::all();

        return Member2::all();

    }
}
