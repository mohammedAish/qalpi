<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptismRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptism_requests', function (Blueprint $table) {
            $table->id();
            $table->string('serviceـprovider');
            $table->string('serviceـprice');
            $table->string('serviceـname');
            $table->string('patientsـname');
            $table->string('patientsـnationality');
            $table->string('patientsـid');
            $table->string('patientsـphone');
            $table->string('app_id');
            $table->string('typeـdiagnosis');
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('reservation_num')->nullable();
            $table->string('status')->default('جديد');
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
        Schema::dropIfExists('baptism_requests');
    }
}
