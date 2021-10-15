<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
            'memberName' => 'Admin',
            'genderId' => '1',
            'memberAddress' => 'admin street',
            'memberEmail' => 'admin@gmail.com',
            'memberPass' => 'admin',
            'roleId' => '1'
        ]);
    }
}
