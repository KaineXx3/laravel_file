<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class MyController extends Controller
{
    public function accessAllDb(){
        $data = Student::all();
        return view("page3", compact('data'));
    }

    public function fetchStudentsData() {
        $data = Student::all();
        return response()->json($data);
    }
    
}
