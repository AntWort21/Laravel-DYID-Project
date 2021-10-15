<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'memberName' => 'Admin',
            'genderId' => '1',
            'memberAddress' => 'admin street',
            'memberEmail' => 'admin@gmail.com',
            'memberPass' => 'admin',
            'roleId' => '1'
            
        ]);
    }
}
