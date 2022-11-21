<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_researchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aplication_id')->on('applications')->onDelete('cascade');
            $table->string('patient_name');
            $table->string('gender');
            $table->string('age');
            $table->string('nationality');
            $table->string('id_number');
            $table->string('id_number_end');
            $table->string('id_source');
            $table->string('current_job');
            $table->string('company_work');
            $table->string('salary');
            $table->string('medical_insurance_class');
            $table->string('address');
            $table->string('telphone');
            $table->string('social_status');
            $table->string('numberـwives');
            $table->string('educational_level');
            $table->string('housing_type');
            $table->string('housing_desc');
            $table->string('rentـvalue');
            $table->string('class');
            $table->string('relativeـname');
            $table->string('relative');
            $table->string('job_relative');
            $table->string('id_relative');
            $table->string('class_relative');
            $table->string('salary_relative');
            $table->string('phone_relative');
            $table->string('status_registered');
            $table->string('company_registered');
            $table->string('socialـevaluation');
            $table->string('help_needed');
            $table->string('cashing_needed');
            $table->string('patient_convert');
            $table->string('patient_apologize');
            $table->string('name_researcher');
            $table->string('date_researcher');

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
        Schema::dropIfExists('app_researchers');
    }
}
