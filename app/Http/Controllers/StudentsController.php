<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentsController extends Controller
{
   


    
    public function store(Request $request)
    {
        $student = new Student();
    
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
    
        $student->save();
        
       
        return (new StudentResource($student))->additional(['message' => 'Student added successfully']);

    }
    
    public function index()
    {
        $students = Student::all();
        
      
        return StudentResource::collection($students);
    }
    
    public function show(Student $student)
    {
        
         return new StudentResource($student);
    }
    
    public function update(Request $request,  Student $student)
    {
        
    
        $student->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
    
        
        return (new StudentResource($student))->additional(['message' => 'Student updated successfully']);
    }
    public function destroy(Student $student)
{
 

    $student->delete();

    // return new StudentResource($student);
    return new StudentResource($student);
     
}

    
   
    
}
