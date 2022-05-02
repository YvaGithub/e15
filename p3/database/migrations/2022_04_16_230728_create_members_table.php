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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); # 'ID', PRIMARY KEY INCREMENTING
            $table->timestamps(); # 'created_at', 'updated_at'
            $table->string('first_name'); #VARCHAR
            $table->string('last_name'); #VARCHAR
            $table->smallInteger('attendance_year'); #SMALLINTEGER
            $table->string('email'); #STRING
            $table->string('phone_number'); #STRING
            $table->text('profile'); #TEXT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
