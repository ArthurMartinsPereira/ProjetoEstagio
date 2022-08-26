<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitaçõesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        Schema::create('solicitações', function (Blueprint $table){
            $table->increments('id');
            $table->String('laboratório');
            $table->String('Professor');
            $table->date('Dia');
            $table->time('Horário');
            $table->String('Estado');
            $table->timestamps();
        });
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
