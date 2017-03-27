<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $nama_variable = $request -> input('nama');
        $freedom = $request -> input('email');
        $gender = $request->input('gender');
        $weapon = $request->input('weapon');
        
        return view('form')
            ->with('nama', $nama_variable)
            ->with('email', $freedom)
            ->with('gender', $gender)
            ->with('weapon', $weapon);
    }
}
