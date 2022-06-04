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
            $table->string('phone')->nullable();
            $table->string('avatar')->default('user.png');
            $table->bigInteger('role_id')->nullable()->default('1');    //ADMIN-0, CRUD_ITEMS-2, NORMAL_USER-1
            $table->string('street')->nullable()->default('unknown');
            $table->string('town')->nullable()->default('unknown');
            $table->string('district')->nullable()->default('unknown');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('payment')->default('full');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
