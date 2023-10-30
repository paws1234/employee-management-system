<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->decimal('salary', 10, 2);
            $table->string('employee', 255);
            $table->unsignedBigInteger('user_id'); // Define user_id as an unsigned integer

            // Define a foreign key constraint on user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
