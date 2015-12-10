<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicianTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::create('physicians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();

            $table->string('country_origin')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residence_address')->nullable();
            $table->string('residence_email')->nullable();
            $table->string('residence_phone')->nullable();
            $table->string('residence_fax')->nullable();
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('country_serve')->nullable();
            $table->string('contact_date')->nullable();

            $table->string('profession')->nullable();
            $table->string('specialities')->nullable();
            $table->string('licence')->nullable();
            $table->string('licensure_country')->nullable();
            $table->string('licensure_state')->nullable();
            $table->string('practice_name')->nullable();
            $table->string('practice_address')->nullable();
            $table->string('practice_phone')->nullable();
            $table->string('practice_email')->nullable();
            $table->string('practice_fax')->nullable();
            $table->string('practice_website')->nullable();

            $table->string('current_employer_name')->nullable();
            $table->string('current_employer_email')->nullable();
            $table->string('current_employer_phone')->nullable();
            $table->string('current_employer_address')->nullable();
            $table->string('current_employer_fax')->nullable();
            $table->string('current_employer_website')->nullable();
            $table->string('current_employer_contact_phone')->nullable();
            $table->string('current_employer_contact_email')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('resume')->nullable();

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
