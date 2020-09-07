<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Moderator Moderator',
                'email' => 'moderator@gmail.com',
                'password' => bcrypt('moderator123'),
            ]
        ];

        foreach ($users as $user){
            User::create($user);
        }


    }
}
