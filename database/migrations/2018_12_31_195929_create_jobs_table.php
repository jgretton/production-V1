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


            $table->integer('total_cycleTime');
            $table->integer('machine');
            $table->boolean('active')->default(false); // To know if the job has been selected to be worked on.
            $table->boolean('completed')->default(false); // To know if the job has been completed.

            $table->unsignedInteger('order_id'); // to link Job to an order

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
