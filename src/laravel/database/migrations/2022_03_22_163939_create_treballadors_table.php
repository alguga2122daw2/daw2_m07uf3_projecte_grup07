<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreballadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treballadors', function (Blueprint $table) {
            $table->string('nom');
            $table->string('email');
            $table->primary('email');
            $table->string('contrasenya');
            $table->string('tipus');
            $table->time('hora_entrada');
            $table->time('hora_sortida');
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
        Schema::dropIfExists('treballadors');
    }
}
