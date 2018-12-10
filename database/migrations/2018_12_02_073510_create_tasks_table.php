<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('description');
            $table->string('status');
            $table->string('client');
            $table->string('order_number');
            $table->string('observations')->nullable();
            $table->string('enrollment')->nullable();
            $table->integer('pax');
            $table->integer('user_id')->unsigned();
            $table->integer('task_type_id')->unsigned();
            $table->integer('day_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('task_type_id')->references('id')->on('task_types');
            $table->foreign('day_id')->references('id')->on('days');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
