<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::resource('students',StudentsController::class);

// // Create a new student record
// Route::post('/student', [StudentsController::class, 'create']);

// // Retrieve a list of all students
// Route::get('/students', [StudentsController::class, 'index']);

// // Retrieve a specific student by ID
// Route::get('/students/{student}', [StudentsController::class, 'show']);

// // Update a student record by ID (using PUT or PATCH)
// Route::put('/students/{id}', [StudentsController::class, 'update']);
// Route::patch('/students/{id}', [StudentsController::class, 'update']);

// // Delete a student record by ID
// Route::delete('/students/{id}', [StudentsController::class, 'destroy']);

