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
        Schema::create('teacher_training_applications', function (Blueprint $table) {
            $table->id();

            $table->string('photo')->nullable();

            // Personal Info
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('unique_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('nid_number')->nullable();
        
            // Employment Info
            $table->string('workplace')->nullable();
            $table->date('first_joining_date')->nullable();
            $table->integer('service_length')->nullable();
            $table->integer('clinical_experience')->nullable();
            $table->integer('management_experience')->nullable();
            $table->integer('teaching_experience')->nullable();
            $table->string('bnmc_registration')->nullable();
            $table->date('bnmc_expiry')->nullable();
        
            // Present Address
            $table->string('present_vill')->nullable();
            $table->string('present_post')->nullable();
            $table->string('present_upazilla')->nullable();
            $table->string('present_district')->nullable();
        
            // Permanent Address
            $table->string('permanent_vill')->nullable();
            $table->string('permanent_post')->nullable();
            $table->string('permanent_upazilla')->nullable();
            $table->string('permanent_district')->nullable();
        
            // Contact Info
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            
            // Qualifications
            $table->json('qualifications')->nullable();

            // Skills Information
            $table->string('computer_skill')->nullable();
            $table->string('english_skill')->nullable();

            // Agrreement Information
            $table->boolean('agree_to_work')->default(false);

            // CPD Activities
            $table->json('cpd_activity')->nullable();

            // Publications
            $table->json('publications')->nullable();

            // Declaration
            $table->boolean('declaration_agree')->default(false);

            // signature
            $table->string('signature')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_training_applications');
    }
};
