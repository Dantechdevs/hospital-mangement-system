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
        Schema::create('medicine_prescription', function (Blueprint $table) {
           // $table->bigIncrements('id');
           $table->id();
            $table->foreignId('prescriptions_id')->constrand();/*bigInteger*/
          //  $table->foreign('prescriptions_id')->references('id')->on('prescriptions')->onDelete('cascade');
            $table->foreignId('medicine_id')->constrand();//bigInteger
           // $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->text('note')->nullable();
            $table->string('issued')->default("NO");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_prescription');
    }
};
