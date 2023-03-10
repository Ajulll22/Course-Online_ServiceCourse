<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ImageCourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Mentor Route
Route::get('mentors',               [MentorController::class, 'index']);
Route::get('mentors/{id}',          [MentorController::class, 'show']);
Route::post('mentors',              [MentorController::class, 'create']);
Route::put('mentors/{id}',          [MentorController::class, 'update']);
Route::delete('mentors/{id}',       [MentorController::class, 'destroy']);

// Course Route
Route::get('courses',               [CourseController::class, 'index']);
Route::post('courses',              [CourseController::class, 'create']);
Route::get('courses/{id}',          [CourseController::class, 'show']);
Route::put('courses/{id}',          [CourseController::class, 'update']);
Route::delete('courses/{id}',       [CourseController::class, 'destroy']);

// Chapter Route
Route::get('chapters',              [ChapterController::class, 'index']);
Route::post('chapters',             [ChapterController::class, 'create']);
Route::get('chapters/{id}',         [ChapterController::class, 'show']);
Route::put('chapters/{id}',         [ChapterController::class, 'update']);
Route::delete('chapters/{id}',      [ChapterController::class, 'destroy']);

// Lesson Route
Route::get('lessons',               [LessonController::class, 'index']);
Route::post('lessons',              [LessonController::class, 'create']);
Route::get('lessons/{id}',          [LessonController::class, 'show']);
Route::put('lessons/{id}',          [LessonController::class, 'update']);
Route::delete('lessons/{id}',       [LessonController::class, 'destroy']);

// Image Course Route
Route::post('image-courses',        [ImageCourseController::class, 'create']);
Route::delete('image-courses/{id}', [ImageCourseController::class, 'destroy']);

// My Course Route
Route::get('my-courses',            [MyCourseController::class, 'index']);
Route::post('my-courses',           [MyCourseController::class, 'create']);
Route::post('my-courses/premium',   [MyCourseController::class, 'createPremiumAccess']);

// Review Route
Route::post('reviews',              [ReviewController::class, 'create']);
Route::put('reviews/{id}',          [ReviewController::class, 'update']);
Route::delete('reviews/{id}',       [ReviewController::class, 'destroy']);
