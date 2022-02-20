<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('members')->insert(['name' => 'member ' . $i, 'email' => 'name'.rand(1, 20), 'adress' => 'adress'.$i]);
        }

        DB::table('users')->insert(
            ['name' => 'nicolas',
                'email' => 'nicolas@devnantes.fr',
                'password' => 'password']);
    }
}
