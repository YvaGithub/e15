<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('first_name'); #VARCHAR
            $table->string('last_name'); #VARCHAR
            $table->smallInteger('attendance_year'); #SMALLINTEGER
            $table->string('phone_number'); #STRING
            $table->text('profile'); #TEXT
        });
    }

    /**
     Reverse the migrations.
     
     @return void
    */ 
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
