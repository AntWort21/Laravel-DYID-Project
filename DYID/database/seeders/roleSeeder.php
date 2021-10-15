<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'roleName' => 'Admin'
        ]);

        DB::table('role')->insert([
            'roleName' => 'Member'
        ]);
    }
}
