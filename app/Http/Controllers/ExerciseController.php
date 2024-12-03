<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function allExercises()
    {
        return Exercise::all();
    }

    public function specExercise(string $exercise_id)
    {
        return DB::table('exercises as e')
        ->select('mondat')
        ->where('exercise_id','=', $exercise_id)
        ->get();
    }

    public function exercisesWithAnswers()
    {
        return DB::table ('exercises as e')
        ->join('answers as a', 'a.melyik_kerdes', 'e.exercise_id')
        ->get();
    }
}
