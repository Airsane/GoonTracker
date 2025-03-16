<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('goon_reports', function (Blueprint $table) {
			$table->id();
			$table->dateTime('reported_when');
			$table->integer('location_id')->index();
			$table->foreignId('user_id')->constrained('users');
		});
	}

	public function down()
	{
		Schema::dropIfExists('goon_reports');
	}
};
