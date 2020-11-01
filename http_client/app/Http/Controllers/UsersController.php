<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Http\Client\Response;

class UsersController extends Controller
{
    public function index()
    {
        $collection = Http::get('https://reqres.in/api/users');

        // return $collection['data'];

        return view('users', [
            'collection' => $collection['data']
        ]);
    }

    public function get()
    {
        $collection = Http::get('https://reqres.in/api/users');

        return $collection->headers();
    }
}
