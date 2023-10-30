<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashAdvancesTable extends Migration
{
    public function up()
    {
        Schema::create('cash_advances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->decimal('amount', 10, 2); // Example: 10,000.00
            $table->date('advance_date');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cash_advances');
    }
}
