<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->input('name');
        $request->session()->flash('user', $data);
        return redirect()->back();
    }
}
