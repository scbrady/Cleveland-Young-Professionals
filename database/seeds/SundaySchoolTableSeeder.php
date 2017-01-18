<?php

use Illuminate\Database\Seeder;

class SundaySchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\SundaySchool::create([
            'name' => 'Young Professionals'
        ]);
        \App\Models\SundaySchool::create([
            'name' => 'College'
        ]);
    }
}
