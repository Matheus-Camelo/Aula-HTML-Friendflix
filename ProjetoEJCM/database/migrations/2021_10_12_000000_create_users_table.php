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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('password');
            $table->integer('age');
            $table->string('gender');
            $table->integer('phone');
            $table->integer('cpf');
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // //Adicionando Foreign Key
         Schema::table('users', function (Blueprint $table){
           $table->foreign('comment_id')->references('id')->on('comentarios')->onDelete('cascade');
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
