<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->unique();
            $table->string('last_name', 30);
            $table->string('age', 3);
            $table->string('gender', 10);
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->unique();
            $table->string('address', 100);
            $table->string('marital_status', 20)->nullable();
            $table->string('identification_card', 14)->unique();

            $table->integer('center_id')->unsigned();
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
