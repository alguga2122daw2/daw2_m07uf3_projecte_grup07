<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dni_client');
            $table->primary('dni_client');
            $table->string('nom_cognoms');
            $table->integer('edat');
            $table->string('telefon');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->string('email');
            $table->string('tipus_targeta');
            $table->string('numTargeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
