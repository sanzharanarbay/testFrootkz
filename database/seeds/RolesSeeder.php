<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'moderator',
                'slug' => 'moderator',
            ]
        ];

        foreach($roles as $role){
            Role::create($role);
        }

    }
}
