<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
            $table->string("dni_client");
            $table->foreign("dni_client")->references("dni_client")->on("clients")->onUpdate("cascade");
            $table->string("id_apartament");
            $table->foreign("id_apartament")->references("id_apartament")->on("apartaments")->onUpdate("cascade");
            $table->primary(['dni_client','id_apartament']);
            $table->date("data_inici");
            $table->time("hora_inici");
            $table->date("data_final");
            $table->time("hora_final");
            $table->string("lloc_lliurament");
            $table->string("lloc_devolucio");
            $table->integer("preu_per_dia");
            $table->boolean("diposit");
            $table->integer("quantitat_diposit");
            $table->string("tipus_asseguranca");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lloguers');
    }
}
