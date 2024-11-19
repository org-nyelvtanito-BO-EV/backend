<?php

use App\Models\Answer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('answers', function (Blueprint $table) {
            $table->id('answer_id');
            $table->string('valasz');
            $table->foreignId('melyik_kerdes')->references('exercise_id')->on('exercises');
            $table->timestamps();
        });

        Answer::create([
            'valasz'=>'stole', 
            'melyik_kerdes'=> 1,
        ]);
        Answer::create([
            'valasz'=>'is stolen', 
            'melyik_kerdes'=> 1,
        ]);
        Answer::create([
            'valasz'=>'was stolen', 
            'melyik_kerdes'=> 1,
        ]);
        Answer::create([
            'valasz'=>'steal', 
            'melyik_kerdes'=> 1,
        ]);

        //masodik
        Answer::create([
            'valasz'=>"didn't let", 
            'melyik_kerdes'=> 2,
        ]);
        Answer::create([
            'valasz'=>"don't let", 
            'melyik_kerdes'=> 2,
        ]);
        Answer::create([
            'valasz'=>'was not let', 
            'melyik_kerdes'=> 2,
        ]);

        //harmadik
        Answer::create([
            'valasz'=>"was written", 
            'melyik_kerdes'=> 3,
        ]);
        Answer::create([
            'valasz'=>"is written", 
            'melyik_kerdes'=> 3,
        ]);
        Answer::create([
            'valasz'=>'wrote', 
            'melyik_kerdes'=> 3,
        ]);
        Answer::create([
            'valasz'=>'write', 
            'melyik_kerdes'=> 3,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
