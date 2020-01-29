<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('seasons');
            $table->string('plataform');
            $table->string('genre');
            $table->integer('ranking');
            $table->integer('rating');
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->timestamps();
        });

        //Adicionando Foreign Key
        Schema::table('series', function (Blueprint $table){
            $table->foreign('comment_id')->references('id')->on('comentarios')->onDelete('set null');
          });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}
