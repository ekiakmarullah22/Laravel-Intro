<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //index 
    public function index() {
        return view('Auth.register');
    }

    //welcome
    public function welcome(Request $request) {
        //tangkap data input
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $gender = $request->input('gender');
        $lang = $request->input('lang');
        $biodata = $request->input('biodata');

        return view('Auth.welcome', ['firstName' => $firstName, 'lastName' => $lastName, 'gender' => $gender, 'lang' => $lang, 'biodata' => $biodata]);
    }
}
