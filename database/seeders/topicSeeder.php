<?php

namespace Database\Seeders;

use App\Models\article;
use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class topicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            ['topic' => "Mom's Corner"],
            ['topic' => "Dad's Corner"],
            ['topic' => "Mom and Dad's Corner"],
            ['topic' => "Family's Corner"],
            ['topic' => "Everyone's Corner"]
        ]);
    }
}
