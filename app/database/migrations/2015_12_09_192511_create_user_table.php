<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @author Mukete ...
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('remember_token')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password');
            $table->integer('country_id')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->integer('race_id')->nullable();
            $table->enum('gender', ['F', 'M'])->nullable();
            $table->enum('status', ['OFF', 'ON']);
            $table->enum('type', ['PATIENT', 'PHYSICIAN']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
}
