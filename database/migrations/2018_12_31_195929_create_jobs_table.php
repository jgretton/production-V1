<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('partNumber');
            $table->integer('orderNumber');
            $table->string('material');
            $table->string('programNumber');
            $table->integer('cycleTime');
            $table->integer('quantity'); 
            $table->integer('total_cycleTime');
            $table->integer('machine');
            $table->boolean('active'); // To know if the job has been selected to be worked on.
            $table->boolean('completed'); // To know if the job has been completed.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
