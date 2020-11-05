<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function store(Request $request)
    {
        $photo = $request->file('photo')->getClientOriginalName();

        $filename = pathinfo($photo, PATHINFO_FILENAME);
        $extension = pathinfo($photo, PATHINFO_EXTENSION);

        $number = rand(100, 100000);

        $storename =  $filename.$number.'.'.$extension;

        $request->file('photo')->storeAs('images', $storename);
        return redirect()->back();
    }
}
