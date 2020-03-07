<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBingosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bingos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('bingo_content');
            $table->string('diffuclity');
            $table->integer('uses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bingos');
    }
}
