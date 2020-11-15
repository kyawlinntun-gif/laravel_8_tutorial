<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        // Accessor
        // return Member::all();

        // Mutator
        $member = new Member;
        $member->name = 'Tun Aung';
        $member->email = 'tunaung@gmail.com';
        $member->address = 'Bahan, Yangon';
        $member->save();
    }
}
