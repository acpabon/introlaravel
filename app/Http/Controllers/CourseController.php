<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // return "index controller course";
        return view('courses.index');
    }

    public function create() {
        // return "create desde controller";
        return view('courses.create');
    }
    
    public function show($curso){
        return view('courses.show', ['curso' => $curso]);
    }
}
