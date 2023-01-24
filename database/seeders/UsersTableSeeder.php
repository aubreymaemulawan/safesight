<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {

        \DB:: table('users')->insert([
            'first_name' => 'Patrick',
            'last_name' => 'Pahunang',
            'address' => 'El Salvador City',
            'phone_no' => '09976429527',
            'email' => 'police@email.com',
            'password' => bcrypt('police123'),
            'user_type' => 2,
        ]);

    }
}
