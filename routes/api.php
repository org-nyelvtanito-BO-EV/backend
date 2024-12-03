<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ExerciseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//kérdésekre vonatkozó lekérések
Route::get('spec-exercise-param/{exercise_id}', [ExerciseController::class, "specExercise"]);

//válaszokra vonatkozó lekérések
Route::get('answers-for-spec-exercise-param/{exercise_id}', [AnswerController::class, "answersForSpecExerciseParam"]);
Route::get('answers-for-spec-exercise', [AnswerController::class, "answersForSpecExercise"]);
Route::get('answers', [AnswerController::class, "allAnswers"]);
Route::get('exercises', [ExerciseController::class, "allExercises"]);

//kérdéseket együtt adja vissza a válaszokkal
Route::get('exercises-with-answers/{exercise_id}',[ExerciseController::class, "exercisesWithAnswers"]);