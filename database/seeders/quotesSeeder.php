<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class quotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');

        for($i=0;$i<=10;$i++){
            DB::table('quotes')->insert([
                'content' => $faker-> sentence($nbWords = 10, $variableNbWords = true)
            ]);
        }
    }
}
