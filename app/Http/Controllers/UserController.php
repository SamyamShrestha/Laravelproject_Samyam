<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

;
class UserController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
            echo json_encode($request->all());

        // if ($request->has('fname'))
        // {
        //     $fullName = $request->input('fname');
        //     $address = $request->input('email');
        //     $password = $request->input('password');
        //     $vpassword = $request->input('cpassword');
        //     $path = $request->file('picfile');
        //     $path -> storeAs('public/images','profile.jpeg');
        //     $path = '/images/profile.jpeg';
        //     return view('displayform', compact('fullName','address', 'password', 'vpassword', 'path'));
        // }
    }
}