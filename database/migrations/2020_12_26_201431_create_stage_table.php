<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage', function (Blueprint $table) {
            $table->id();
            $table->string('validation_stage_jury');
            $table->string('validation_convention_tuteur');
            $table->string('remarque_tuteur');




            $table->foreignID('offre_id')->nullable()->constrained('offres');
            $table->foreignID('entreprise_id')->nullable()->constrained('entreprises');
            $table->foreignID('jury_id')->nullable()->constrained('jurys');
            $table->foreignID('student_id')->nullable()->constrained('students');
            $table->foreignID('tuteurs_id')->nullable()->constrained('tuteurs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage');
    }
}
