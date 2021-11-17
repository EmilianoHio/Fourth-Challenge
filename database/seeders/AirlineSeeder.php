<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('airlines')->insert([
            'id' => 1,
            'city_id' => 1,
            'name_airline' => 'Airline name Montevideo',
            'desc_business' => 'Airline description Montevideo',
            'disponibility' => 1,
        ]);

        DB::table('airlines')->insert([
            'id' => 2,
            'city_id' => 2,
            'name_airline' => 'Airline name Artigas',
            'desc_business' => 'Airline description Artigas',
            'disponibility' => 0,
        ]);

    }
}
