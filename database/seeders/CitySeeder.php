<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();

        DB::table('cities')->insert([
            'id' => 1,
            'name_city' => 'Aeroelinea Montevideo',
        ]);

        
        DB::table('cities')->insert([
            'id' => 2,
            'name_city' => 'Aeroelinea Artigas',
        ]);
        

    }
}
