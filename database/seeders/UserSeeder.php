<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'roleID' => 1,
                'genderID' => 1,
                'firstName' => 'joko',
                'middleName' => 'middle',
                'lastName' => 'joko',
                'email' => 'joko@gmail.com',
                'password' => 'joko1234',
                'picture' => 'profile.png',
                'modifiedAt' => Carbon::now(),
                'modifiedBy' => Carbon::now()
            ],
            [
                'roleID' => 2,
                'genderID' => 2,
                'firstName' => 'jokoadmin',
                'middleName' => 'jokoadmin',
                'lastName' => 'jokoadmin',
                'email' => 'jokoadmin@gmail.com',
                'password' => 'jokoadmin123',
                'picture' => 'profile.png',
                'modifiedAt' => Carbon::now(),
                'modifiedBy' => Carbon::now()
            ],
            [
                'roleID' => 2,
                'genderID' => 2,
                'firstName' => 'admin2',
                'middleName' => 'min',
                'lastName' => 'min 2',
                'email' => 'admin2@gmail.com',
                'password' => 'admin2',
                'picture' => 'profile.png',
                'modifiedAt' => Carbon::now(),
                'modifiedBy' => Carbon::now()
            ],
        ]);
    }
}
