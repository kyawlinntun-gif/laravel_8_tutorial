<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index()
    {
        $data = 'hi, i am learning the laravel.';
        // return Str::ucfirst($data);

        return Str::of($data)
                ->ucfirst($data)
                ->replace('Hi', 'Hello', $data)
                ->camel($data);
    }
}
