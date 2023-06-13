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
       
          
            Schema::create('prescriptions', function (Blueprint $table) {  
                $table->id();
               // $table->bigIncrements('id');
               // $table->bigInteger('doctor_id'); same as as above id
               $table->foreignId('doctor_id')->constrained()->nullable();
               // $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
                //$table->bigInteger('patient_id');
                $table->foreignId('patients_id')->constrained()->nullable();
               // $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
               // $table->bigInteger('appointments_id');
               $table->foreignId('appointments_id')->constrained()->nullable();
               // $table->foreign('appointments_id')->references('id')->on('patients')->onDelete('cascade');
                $table->char('medicine_issued')->default("NO");
                $table->json('bp')->nullable();
                $table->json('cholestrol')->nullable();
                $table->json('blood_sugar')->nullable();
                $table->longText('diagnosis')->nullable();
                $table->json('medicines')->nullable();
                $table->timestamps();
           
        });
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
