<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->string("id_apartament");
            $table->primary("id_apartament");
            $table->string("ref_catast");
            $table->string("ciutat");
            $table->string("barri");
            $table->string("carrer");
            $table->integer("porta");
            $table->integer("pis");
            $table->integer("num_llits");
            $table->integer("num_habitacions");
            $table->boolean("ascensor");
            $table->string("calefaccio");
            $table->boolean("aire_condicionat");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartaments');
    }
}
