<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $url = route('index');
        // dd($url);
        return view('admin');
    }
}
