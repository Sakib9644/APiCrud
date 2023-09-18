<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentsController extends Controller
{
   

    // ...
    
    public function store(Request $request)
    {
        $student = new Students();
    
        $student->fname = $request->input('fname');
        $student->lastname = $request->input('lastname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
    
        $student->save();
        
       
        return new StudentResource($student);
    }
    
    public function index()
    {
        $students = Students::all();
        
      
        return StudentResource::collection($students);
    }
    
    public function show(Students $student)
    {
        
        
       
        return new StudentResource($student);
    }
    
    public function update(Request $request,  Students $student)
    {
        
    
        $student->update([
            'fname' => $request->input('fname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
    
        
        return new StudentResource($student);
    }
    public function destroy(Students $student)
{
 

    $student->delete();

    return new StudentResource($student);
}

    
   
    
}
