<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReportInformation extends Migration
{
    public function up()
    {
        Schema::create('report_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unrecognized_faces_id')->unsigned();
            $table->integer('is_validated');
            $table->timestamps();

            $table->foreign('unrecognized_faces_id')
                    ->references('id')
                    ->on('unrecognized_faces')
                    ->constrained()
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('report_information');
    }
};
