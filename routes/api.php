<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ExerciseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('answers-for-spec-exercise-param/{exercise_id}', [AnswerController::class, "answersForSpecExerciseParam"]);
Route::get('answers-for-spec-exercise', [AnswerController::class, "answersForSpecExercise"]);
Route::get('answers', [AnswerController::class, "allAnswers"]);
Route::get('exercises', [ExerciseController::class, "allExercises"]);