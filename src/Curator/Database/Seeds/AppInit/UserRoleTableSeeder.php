<?php

use Illuminate\Database\Seeder;
use Curator\Models;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the UserRole table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the SysAdmin user.
        $userID = Curator\Models\User::select('userID')
                                           ->where('username', 'SysAdmin')
                                           ->first()
                                           ->userID;

        //Get ID for the Super Administrator role.
        $roleID = Curator\Models\Role::select('roleID')
                                           ->where('roleName', 'Super Administrator')
                                           ->first()
                                           ->roleID;

        //Insert the user / role relationship for the SysAdmin user.
        DB::table('UserRole')->insert([
            'userID' => $userID,
            'roleID' => $roleID
        ]);
    }
}
