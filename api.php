<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', [Garbo::class, 'index'])->name('students.index');
Route::post('/students', [Garbo::class, 'store'])->name('students.store');
Route::get('/students/{id}', [Garbo::class, 'show'])->name('students.show');
Route::patch('/students/{id}', [Garbo::class, 'update'])->name('students.update');
Route::get('/students/{id}/subjects', [StudentSubjectController::class, 'index']);
Route::post('/students/{id}/subjects', [StudentSubjectController::class, 'store']);
Route::get('/students/{id}/subjects/{subject_id}', [StudentSubjectController::class, 'show']);
Route::patch('/students/{id}/subjects/{subject_id}', [StudentSubjectController::class, 'update']);