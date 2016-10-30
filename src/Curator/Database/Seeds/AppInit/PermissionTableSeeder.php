<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the Permissions table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert a list of system permissions which can be assigned to roles and users.
        //These are protected and cannot be deleted.
        DB::table('Permission')->insert([
            [
                'permissionName' => 'Admin',
                'displayName'    => 'Administrator',
                'description'    => 'Grants the user or role administrative rights.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:CreateAdmin',
                'displayName'    => 'Create Admin',
                'description'    => 'Grants administrators the ability to create other administrators.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:Activity',
                'displayName'    => 'Activity',
                'description'    => 'Grants administrators access to the User Activity section.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:Users',
                'displayName'    => 'Users',
                'description'    => 'Grants administrators access to list and view all users.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:UsersCreate',
                'displayName'    => 'Create User',
                'description'    => 'Grants administrators the ability to create other users.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:UsersEdit',
                'displayName'    => 'Edit Users',
                'description'    => 'Grants administrators the ability to edit user details (non-administrators only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:UsersUniquePermissions',
                'displayName'    => 'Assign Unique Permissions',
                'description'    => 'Grants administrators the ability to assign users unique permissions.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:UsersDelete',
                'displayName'    => 'Delete Users',
                'description'    => 'Grants administrators the ability to delete other users (non-administrators only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:Roles',
                'displayName'    => 'Roles',
                'description'    => 'Grants administrators access to list and view all user roles.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:RolesCreate',
                'displayName'    => 'Roles Create',
                'description'    => 'Grants administrators the ability to create additional user roles.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:RolesEdit',
                'displayName'    => 'Roles Edit',
                'description'    => 'Grants administrators the ability to edit user roles (non-administion roles only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:RolesDelete',
                'displayName'    => 'Roles Delete',
                'description'    => 'Grants administrators the ability to delete user roles (non-administion roles only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:Permissions',
                'displayName'    => 'Permissions',
                'description'    => 'Grants administrators access to list and view all user permissions.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:PermissionsCreate',
                'displayName'    => 'Permissions Create',
                'description'    => 'Grants administrators the ability to create additional user permissions.',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:PermissionsEdit',
                'displayName'    => 'Permissions Edit',
                'description'    => 'Grants administrators the ability to edit user Permissions (non-administion permissions only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:PermissionsDelete',
                'displayName'    => 'Permissions Delete',
                'description'    => 'Grants administrators the ability to delete user Permissions (non-administion permissions only).',
                'protected'      => TRUE
            ],
            [
                'permissionName' => 'Admin:Settings',
                'displayName'    => 'Settings',
                'description'    => 'Grants administrators the ability to modify Curator settings.',
                'protected'      => TRUE
            ]
        ]);
    }
}
