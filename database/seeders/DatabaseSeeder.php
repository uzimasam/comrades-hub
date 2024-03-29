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
        DB::table('users')->insert([
            'firstname' => 'Sam',
            'lastname' => 'Uzima',
            'email' => 'uzimasamuel1@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('23+67Comradeshub'),
        ]);
    }
}
