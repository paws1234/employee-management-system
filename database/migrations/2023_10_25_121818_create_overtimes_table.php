<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimesTable extends Migration
{
    public function up()
    {
        Schema::create('overtimes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->dateTime('overtime_date');
            $table->decimal('hours_worked', 5, 2); // Example: 5.50 hours
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('overtimes');
    }
}
