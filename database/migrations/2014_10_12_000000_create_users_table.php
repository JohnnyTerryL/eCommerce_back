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
            $table->id('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('full_name');
            $table->string('password');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_country');
            $table->string('address_cp');
            $table->boolean('enabled');
            $table->integer('jwt_id');
            $table->string('reset_password_token')->nullable();
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
        Schema::dropIfExists('users');
    }
};
