<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Scott Brady',
            'email' => 'a@a.a',
            'password' => 'passowrd',
        ]);
    }
}
