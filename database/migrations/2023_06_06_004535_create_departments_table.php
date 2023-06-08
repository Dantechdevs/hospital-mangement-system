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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('photo_path');
            $table->foreignId('hod_id')->constrand();
            $table->foreignId('block_id')->constrand();
           // $table->unsignedBigInteger('hod_id');
           // $table->unsignedBigInteger('block_id');
           // $table->foreign('hod_id')->references('doctor_id')->on('hods')->cascadeOnDelete();
           // $table->foreign('block_id')->references('blockcode')->on('blocks')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
