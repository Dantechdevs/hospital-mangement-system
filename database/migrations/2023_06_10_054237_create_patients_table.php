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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('sex');
            $table->string('dob');
            $table->string('age');
            $table->string('CivilStatus')->nullable();
            $table->string('birthplace');
            $table->string('nationality');
            $table->string('religion');
            $table->string('occupation');
            $table->string('guardian')->nullable();
            $table->string('image')->default('dist/img/avatar.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
