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
                $table->bigIncrements('id');
                $table->bigInteger('doctor_id');
                $table->foreign('doctor_id')->references('id')->on('users')->onDelete('cascade');
                $table->bigInteger('patient_id');
                $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
                $table->bigInteger('appointments_id');
                $table->foreign('appointments_id')->references('id')->on('patients')->onDelete('cascade');
                $table->char('medicine_issued',3)->default("NO");
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
