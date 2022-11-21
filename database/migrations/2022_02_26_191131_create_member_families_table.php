<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_families', function (Blueprint $table) {
            $table->id();
            $table->string('name_member');
            $table->string('relative_member');
            $table->string('age_member');
            $table->string('socical_status_member');
            $table->string('status_member');
            $table->string('education_member');
            $table->string('salary_member');
            $table->foreignId('researchers_id')->on('app_researchers')->onDelete('cascade');

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
        Schema::dropIfExists('member_families');
    }
}
