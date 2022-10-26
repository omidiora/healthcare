<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('matric_no');
            $table->string('department');
            $table->string('phone')->nullable();
            $table->string('schedule_date')->nullable();
            $table->string('schedule_time')->nullable();
            // schedule_time
            $table->string('photo')->nullable();
            $table->string('level')->default('100');
            $table->string('faculty')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('compelete_profile')->nullable();
            $table->string('password');
            $table->rememberToken();
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
}
