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
            $table->string("dni_Client");
            $table->foreign("dni_Client")->references("dni_Client")->on("clients")->onUpdate("cascade");
            $table->string("id_Apartament");
            $table->foreign("id_Apartament")->references("id_Apartament")->on("apartaments")->onUpdate("cascade");
            $table->primary(['dni_Client','id_Apartament']);
            $table->date("data_Inici");
            $table->time("hora_Inici");
            $table->date("data_Final");
            $table->time("hora_Final");
            $table->string("lloc_Lliuament");
            $table->integer("preu_Dia");
            $table->boolean("diposit");
            $table->integer("cant_Diposit");
            $table->string("tipusAsseg");
            $table->string("llocDev");
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
