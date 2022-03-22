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
            $table->string("id_Apartament");
            $table->primary("id_Apartament");
            $table->string("refCast");
            $table->string("ciutat");
            $table->string("barri");
            $table->string("carrer");
            $table->integer("pis");
            $table->integer("porta");
            $table->integer("numLlits");
            $table->integer("numHab");
            $table->boolean("ascen");
            $table->boolean("ac");
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
