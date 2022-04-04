<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('treballadors')->insert([
            'nom'=>'admin',
            'email'=>'admin@protonmail.com',
            'contrasenya'=> Hash::make('FjeClot22@'),
            'tipus'=>'Admin',
            'hora_entrada'=>'00:00',
            'hora_sortida'=>'23:59'
        ]);

        DB::table('clients')->insert([
            'dni_client' => '98378472E',
            'nom_cognoms' => 'Rosie O. Connor',
            'edat' => 42,
            'telefon' => '729517256',
            'adreca' => 'Calle Clot 336',
            'ciutat' => 'barcelona',
            'pais' => 'espanya',
            'email' => 'RosieOConnor@hotmail.com',
            'tipus_targeta' => 'Credit',
            'num_targeta' => '4929043901192161'
        ]);

        DB::table('apartaments')->insert([
            "id_apartament" => 'aprt7564839',
            "ref_catast" => '1234567AB1234A0000AB',
            "ciutat" => 'Barcelona',
            "barri" => 'Gracia',
            "carrer" => 'Carrer dels Motors',
            "porta" => 45,
            "pis" => 3,
            "num_llits" => 3,
            "num_habitacions" => 3,
            "ascensor" => true,
            "calefaccio" => 'GasNatural',
            "aire_condicionat" => false
        ]);

        DB::table('lloguers')->insert([
            'dni_client' => '98378472E',
            'id_apartament' => 'aprt7564839',
            'data_inici' => '2022/03/28',
            'hora_inici' => '9:00',
            'data_final' => '2025/03/28',
            'hora_final' => '21:00',
            'lloc_lliurament' => 'Plaça Catalunya',
            'lloc_devolucio' => 'Plaça Catalunya',
            'preu_per_dia' => 115,
            'diposit' => true,
            'quantitat_diposit' => 1200,
            'tipus_asseguranca' => '1000'
        ]);
    }
}
