<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('category')->nullable();
            $table->string('j_organization')->nullable();
            $table->string('j_title')->nullable();
            $table->integer('j_vacancy')->nullable();
            $table->string('j_skill')->nullable();
            $table->string('j_status')->nullable();
            $table->string('j_edu_req')->nullable();
            $table->string('j_ex_req')->nullable();
            $table->string('j_add_req')->nullable();
            $table->string('j_loc')->nullable();
            $table->string('j_salary')->nullable();
            $table->string('j_pub_date')->nullable();
            $table->string('j_end_date')->nullable();
            $table->string('j_description')->nullable();
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
        Schema::dropIfExists('job_details');
    }
}
