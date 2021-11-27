<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            // user1
            [
                'email'=>'maygiathoangphong@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>1
            ],
            //user2
            [
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>1
            ],
        ];
        DB::table('ql_users')->insert($data);
    }
}
