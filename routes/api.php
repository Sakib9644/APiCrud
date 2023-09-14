<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Create a new student record
Route::post('/student', [ApiController::class, 'create']);

// Retrieve a list of all students
Route::get('/students', [ApiController::class, 'index']);

// Retrieve a specific student by ID
Route::get('/students/{id}', [ApiController::class, 'show']);

// Update a student record by ID (using PUT or PATCH)
Route::put('/students/{id}', [ApiController::class, 'update']);
Route::patch('/students/{id}', [ApiController::class, 'update']);

// Delete a student record by ID
Route::delete('/students/{id}', [ApiController::class, 'destroy']);

