<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            // Campos tabla
            $table->increments('id');
            $table->date('fecha');
            $table->string('titulo')->unique();
            $table->text('contenido');
            $table->string('imagen');
            $table->integer('categoria_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            // Claves Foraneas
            $table->foreign('categoria_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
