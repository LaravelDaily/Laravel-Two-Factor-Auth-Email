<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
        ];

        Role::insert($roles);
    }
}
