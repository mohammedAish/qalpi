<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_requests', function (Blueprint $table) {
            $table->id();
            $table->string('patientsـname');
            $table->string('serviceـprovider');
            $table->string('patientsـnationality');
            $table->string('patientsـid');
            $table->string('patientsـphone');
            $table->string('user_name');
            $table->string('user_phone');
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
        Schema::dropIfExists('cost_requests');
    }
}
