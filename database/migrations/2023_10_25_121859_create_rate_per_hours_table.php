<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatePerHoursTable extends Migration
{
    public function up()
    {
        Schema::create('rate_per_hours', function (Blueprint $table) {
            $table->id();
            $table->decimal('rate', 10, 2);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rate_per_hours');
    }
}
