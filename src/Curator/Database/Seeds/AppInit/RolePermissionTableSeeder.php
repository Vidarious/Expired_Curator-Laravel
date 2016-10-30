<?php

use Illuminate\Database\Seeder;
use Curator\Models;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the Role Permission table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the Administrator role.
        $role       = Curator\Models\Role::select('roleID')
                                               ->where('roleName', 'Administrator')
                                               ->first()
                                               ->roleID;

        //Get ID's of the permissions to grant to the Administrator role.
        $permissions = Curator\Models\Permission::select('permissionID')
                                                      ->where('permissionName', 'Admin')
                                                      ->orWhere('permissionName', 'Admin:Activity')
                                                      ->orWhere('permissionName', 'Admin:Users')
                                                      ->orWhere('permissionName', 'Admin:UsersCreate')
                                                      ->orWhere('permissionName', 'Admin:UsersEdit')
                                                      ->orWhere('permissionName', 'Admin:UsersDelete')
                                                      ->orWhere('permissionName', 'Admin:Permissions')
                                                      ->orWhere('permissionName', 'Admin:PermissionsCreate')
                                                      ->orWhere('permissionName', 'Admin:PermissionsEdit')
                                                      ->orWhere('permissionName', 'Admin:PermissionsDelete')
                                                      ->orWhere('permissionName', 'Admin:Roles')
                                                      ->orWhere('permissionName', 'Admin:RolesCreate')
                                                      ->orWhere('permissionName', 'Admin:RolesEdit')
                                                      ->orWhere('permissionName', 'Admin:RolesDelete')
                                                      ->get();

        foreach($permissions as $permission)
        {
            $permissionsArray[] =
                                    [
                                        'roleID'       => $role,
                                        'permissionID' => $permission->permissionID
                                    ];
        }

        //Insert the role / permission relationship for Administrators.
        DB::table('RolePermission')->insert($permissionsArray);
    }
}
