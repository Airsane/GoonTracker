<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('audits', function (Blueprint $table) {
			$table->id();
			$table->string('message')->nullable();
			$table->foreignId('ref_id')->nullable()->constrained('audits');
			$table->foreignId('user_id')->constrained('users');
			$table->integer('event');
		});
	}

	public function down()
	{
		Schema::dropIfExists('audits');
	}
};
