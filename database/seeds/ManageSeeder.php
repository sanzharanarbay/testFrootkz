<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\DB;

class ManageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users_roles = [
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ]
        ];

        foreach ($users_roles as $users_role){
            DB::table('users_roles')->insert($users_role);
        }

    $roles_permissions = [
        [
            'role_id' => 1,
            'permission_id' => 1,
        ],
        [
            'role_id' => 1,
            'permission_id' => 2,
        ],
        [
            'role_id' => 1,
            'permission_id' => 3,
        ],
        [
            'role_id' => 1,
            'permission_id' => 4,
        ],
        [
            'role_id' => 2,
            'permission_id' => 1,
        ],
        [
            'role_id' => 2,
            'permission_id' => 2,
        ],
        [
            'role_id' => 2,
            'permission_id' => 3,
        ]
    ];

        foreach ($roles_permissions as $roles_permission){
            DB::table('roles_permissions')->insert($roles_permission);
        }

        $users_permissions = [
            [
                'user_id' => 1,
                'permission_id' => 1,
            ],
            [
                'user_id' => 1,
                'permission_id' => 2,
            ],
            [
                'user_id' => 1,
                'permission_id' => 3,
            ],
            [
                'user_id' => 1,
                'permission_id' => 4,
            ],
            [
                'user_id' => 2,
                'permission_id' => 1,
            ],
            [
                'user_id' => 2,
                'permission_id' => 2,
            ],
            [
                'user_id' => 2,
                'permission_id' => 3,
            ]
        ];


        foreach ($users_permissions as $users_permission){
            DB::table('users_permissions')->insert($users_permission);
        }

    }
}
