<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the Role table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert the system roles that users can be assigned to.
        //These are protected and cannot be deleted.
        DB::table('Role')->insert([
            [
                'roleName'    => 'Generic',
                'description' => 'A generic user role with minimal permissions. This role cannot be modified or deleted.',
                'protected'   => TRUE
            ],
            [
                'roleName'    => 'Administrator',
                'description' => 'A standard administrator role with elevated permissions. This role cannot be modified or deleted.',
                'protected'   => TRUE
            ],
            [
                'roleName'    => 'Super Administrator',
                'description' => 'The highest authority level possible. Users in this role have full permissions. This role cannot be modified or deleted.',
                'protected'   => TRUE
            ]
        ]);
    }
}
