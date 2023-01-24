<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnrecognizedFaces extends Migration
{

    public function up()
    {
        Schema::create('unrecognized_faces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('image_path')->nullable();
            $table->string('image_name')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->constrained()
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('unrecognized_faces');
    }
};
