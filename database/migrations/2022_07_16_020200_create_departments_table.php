<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->timestamps();
        });
		
		DB::table('departments')->insert([
            ['name' => 'Teknik Elektro'],
            ['name' => 'Kimia'],
            ['name' => 'Pariwisata'],
            ['name' => 'Teknologi Informasi'],
            ['name' => 'Administrasi Bisnis'],
            ['name' => 'Teknik Sipil'],
            ['name' => 'Akuntansi'],
            ['name' => 'Teknik Mesin']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
