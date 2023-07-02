<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run(): void
    {
        $cat = ["Mom's Corner", "Dad's Corner", "Mom & Dad's Corner", "Family's Corner", "Everyone's Corner"];
        for ($i = 0 ; $i < 5 ; $i++){
         DB::table('categories')->insert([
            'name' => $cat[$i],
         ]) ;  
        }
    }
}
