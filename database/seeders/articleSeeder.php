<?php

namespace Database\Seeders;

use App\Models\article;
use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class articleSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $topic = DB::table('topics')->pluck('id');
        for($i=0;$i<=50;$i++){
            DB::table('articles')->insert([
                'topics_id' => $faker->randomElement($topic),
                'title' => $faker-> sentence($nbWords = 5, $variableNbWords = true),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'postdate' => $faker->date('D, M d Y'),
                'body' => $faker->paragraph($nbSentence = 20, $variableNbSentence = true)
            ]);
        }
    }
}
