<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStudyProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_programs', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->foreignId('department_id')
				->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
            $table->timestamps();
        });

		DB::table('study_programs')->insert([
			[
				'name' => 'Teknik Elektro',
				'department_id' => 1
			], [
				'name' => 'Teknik Kimia',
				'department_id' => 2
			], [
				'name' => 'Pariwisata',
				'department_id' => 3
			], [
				'name' => 'Perhotelan',
				'department_id' => 3
			], [
				'name' => 'Travel',
				'department_id' => 3
			], [
				'name' => 'Teknik Informatika',
				'department_id' => 4
			], [
				'name' => 'Teknik Komputer',
				'department_id' => 4
			], [
				'name' => 'Manajemen Pemasaran',
				'department_id' => 5
			], [
				'name' => 'Administrasi Bisnis (Niaga)',
				'department_id' => 5
			], [
				'name' => 'Teknik Sipil',
				'department_id' => 6
			], [
				'name' => 'Akuntansi',
				'department_id' => 7
			], [
				'name' => 'Teknik Mesin',
				'department_id' => 8
			],
		]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_programs');
    }
}
