<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('departments', function (Blueprint $table) {
			$table->foreignId('campus_id')->default(1)
				->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('departments', function (Blueprint $table) {
			$table->dropColumn('campus_id');
		});
    }
}
