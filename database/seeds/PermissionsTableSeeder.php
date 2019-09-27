<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-27 07:11:07',
                'updated_at' => '2019-09-27 07:11:07',
            ],
        ];

        Permission::insert($permissions);
    }
}
