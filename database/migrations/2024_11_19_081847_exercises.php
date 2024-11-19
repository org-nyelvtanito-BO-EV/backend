<?php

use App\Models\Exercise;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table){
            $table->id('exercise_id');
            $table->string('magyar');
            $table->string('mondat');
            $table->string('alap');
            $table->timestamps();
        });

        Exercise::create([
            'magyar'=>'A fiú ellopta az almát ma reggel.', 
            'mondat'=> 'The boy _ an apple this morning.',
            'alap' => 'steal'
        ]);

        Exercise::create([
            'magyar'=>'Senkit nem engedtek be tegnap este.', 
            'mondat'=> 'They _ anybody in last night.',
            'alap' => 'not let'
        ]);

        Exercise::create([
            'magyar'=>'A történetet egy kis lány írta 2011-ben.', 
            'mondat'=> 'The story _ by a little girl in 2011.',
            'alap' => 'write'
        ]);
    }

    public function down(): void
    {
        //
    }
};
