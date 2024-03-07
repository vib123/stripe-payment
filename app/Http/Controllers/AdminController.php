<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Events\UpdateStudent;

class AdminController extends Controller
{
    public function index()
    {
        // reverse routing
        // $url = route('index');
        // dd($url);

        // call the event
        $student = Student::inRandomOrder()->first();
        event(new UpdateStudent($student));

        return view('admin');
    }
}
