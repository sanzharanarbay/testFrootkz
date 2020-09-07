<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            [
                'name' => 'list-invoice',
                'slug' => 'list-invoice',
            ],
            [
                'name' => 'create-invoice',
                'slug' => 'create-invoice',
            ],
            [
                'name' => 'update-invoice',
                'slug' => 'update-invoice',
            ],
            [
                'name' => 'delete-invoice',
                'slug' => 'delete-invoice',
            ]
        ];

        foreach ($permissions as $permission){
            Permission::create($permission);
        }


    }
}
