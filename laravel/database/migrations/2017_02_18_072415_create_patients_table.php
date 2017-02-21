<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('p_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('care_users');
            $table->string('image');
            $table->text('str_address');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('country');
            $table->string('gender');
            $table->string('blood_group');
            $table->text('identification_mark');
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
        Schema::dropIfExists('patients');
    }
}
