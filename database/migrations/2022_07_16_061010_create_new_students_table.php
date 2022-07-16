<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_students', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('birth_place')->nullable();
			$table->date('birth_date')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('religion')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('id_no')->nullable();
			$table->string('gender')->nullable();
			$table->string('mother_name')->nullable();
			$table->string('hobbies_json')->nullable();
			$table->string('address')->nullable();
			$table->string('zip')->nullable();
			$table->string('prov')->nullable();
			$table->string('last_edu')->nullable();
			$table->string('school_name')->nullable();
			$table->float('avg_score')->nullable();

			$table->foreignId('study_program_1_id')
				->constrained('study_programs')
				->onUpdate('cascade')
				->onDelete('cascade');

			$table->foreignId('study_program_2_id')
				->constrained('study_programs')
				->onUpdate('cascade')
				->onDelete('cascade');
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_students');
    }
}
