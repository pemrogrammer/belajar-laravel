<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('address');
            $table->timestamps();
        });

		DB::table('campuses')->insert([
            [
				'name' => 'Utama',
				'address' => 'JL. Cipto Mangunkusumo'
			], [
				'name' => 'Maritim',
				'address' => 'JL. Sempaja jung'
			]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campuses');
    }
}
