<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('gender');
            $table->string('nationality')->nullable();
            $table->string('class')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('code')->nullable();
            $table->string('id_number');
            $table->string('id_number_end');
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('rentـvalue')->nullable();
            $table->string('relativeـname')->nullable();
            $table->string('phoneـname')->nullable();
            $table->string('relative')->nullable();
            $table->string('salary')->nullable();
            $table->string('medical_insurance_class')->nullable();
            $table->string('current_job')->nullable();
            $table->string('telphone')->nullable();
            $table->string('medical_specialty')->nullable();
            $table->string('patient_condition')->nullable();
            $table->string('id_photo')->nullable();
            $table->string('medical_report')->nullable();
            $table->string('housing_contract')->nullable();
            $table->string('definition_salary')->nullable();
            $table->string('visa_photo')->nullable();
            $table->string('other')->nullable();
            $table->string('status')->default('جديد');
            $table->string('file_researcher')->nullable();
            $table->string('files_patients')->nullable();
            $table->string('archive')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
