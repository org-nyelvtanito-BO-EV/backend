<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function allAnswers()
    {
        return Answer::all();
    }

    public function answersForSpecExercise()
    {
        return DB::table('answers as a')
        ->select('valasz')
        ->where('melyik_kerdes','=','1')
        ->get();
    }

    public function answersForSpecExerciseParam(string $exercise_id)
    {
        return DB::table('answers as a')
        ->select('valasz')
        ->where('melyik_kerdes','=', $exercise_id)
        ->get();
    }
}
