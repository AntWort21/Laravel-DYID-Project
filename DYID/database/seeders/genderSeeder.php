<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gender')->insert([
            'genderName' => 'Male'
        ]);

        DB::table('gender')->insert([
            'genderName' => 'Female'
        ]);
    }
}
