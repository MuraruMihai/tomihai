<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume');
            $table->string('prenume');
            $table->string('telefon');
            $table->string('data');
            $table->string('interval');
            $table->string('optiuni');
            $table->string('varsta');
            $table->string('sex');
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
        Schema::dropIfExists('rezervares');
    }
}
