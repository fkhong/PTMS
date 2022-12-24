<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('staffId');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('expertise');
            $table->string('studentSupervised1')-> default("Null");
            $table->string('studentSupervised2')-> default("Null");
            $table->string('studentSupervised3')-> default("Null");
            $table->string('studentSupervised4')-> default("Null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
};
