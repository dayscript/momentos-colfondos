<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
        {
            $table->smallIncrements('id');
            $table->string('name', 255);
            $table->string('lastname', 255);
            $table->string('position');
            $table->longText('description');
            $table->string('image');
        });

        Schema::create('activities', function(Blueprint $table)
        {
            $table->smallIncrements('id');
            $table->string('name', 255);
        });

        Schema::create('employees_activities', function(Blueprint $table)
        {
            $table->smallInteger('activity_id')->unsigned()->nullable();
            $table->smallInteger('employee_id')->unsigned()->nullable();

            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->primary(['activity_id', 'employee_id']);
        });

        Schema::create('registers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('lastname', 255);
            $table->integer('identity_card')->unsigned();
            $table->string('cellphone', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
        });

        Schema::create('schedules', function(Blueprint $table)
        {
            $table->increments('id');
            $table->smallInteger('activity_id')->unsigned()->nullable();
            $table->smallInteger('employee_id')->unsigned()->nullable();
            $table->integer('register_id')->unsigned()->nullable();
            $table->date('date');

            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('register_id')->references('id')->on('registers');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees_activities');
        Schema::drop('schedules');
        Schema::drop('activities');
        Schema::drop('registers');
        Schema::drop('employees');
    }
}
