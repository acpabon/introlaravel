<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourses;

class CourseController extends Controller
{
    public function index()
    {
        // return "index controller course";
        $courses = Curso::orderBy('id', 'desc')->paginate(15);
        return view('courses.index', ['courses' => $courses]);
    }

    public function create() {
        // return "create desde controller";
        return view('courses.create');
    }
    
    public function show(Curso $curso){
        // $course = Curso::find($id);
        return view('courses.show', ['curso' => $curso]);
    }
    
    public function store(StoreCourses $request){

        $curso = Curso::create([
            'name' => $request->name, 
            'description' => $request->description, 
            'category' => $request->category
        ]);

        // $course = new Curso();
        
        // $course->name = $request['name'];
        // $course->description = $request['description'];
        // $course->category = $request['category'];
        
        // $course->save();

        return redirect()->route('courses.index');
        // return view('courses.create');
    }

    public function edit(Curso $curso){
        // $course = Curso::find($id);
        return view('courses.edit', ['curso' => $curso]);
    }

    public function update(StoreCourses $request, Curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return redirect()->route('courses.show', $curso->id);
    }
    
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('courses.index');
    }
}