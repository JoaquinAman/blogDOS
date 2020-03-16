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
            $table->increments('id'); // INTEGER UNSIGNED - AUTOINCREMENT
           
           // $table->integer('profession_id')->unsigned();
           // $table->foreign('profession_id')->references('id')->on('professions');
           
            $table->string('name'); // VARCHAR
            $table->string('email')->unique(); // VARCHAR - UNIQUE
            $table->timestamp('email_verified_at')->nullable(); // VARCHAR
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
