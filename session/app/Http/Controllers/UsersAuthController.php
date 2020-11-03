<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersAuthController extends Controller
{
    public function loginCheck(Request $request)
    {
        $data = $request->input();
        // echo $data['user'];
        $request->session()->put('user', $data['name']);
        return redirect('profile');
    }
}
