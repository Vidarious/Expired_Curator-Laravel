<?php

use Illuminate\Database\Seeder;
use Curator\Models;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the Setting table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID of the role which will be set as the default role for new users.
        $roleID = Curator\Models\Role::select('roleID')
                                           ->where('roleName', 'Generic')
                                           ->first()
                                           ->roleID;

        //Insert the default settings for the Curator application.
        DB::table('Setting')->insert([
            'loginMethod'             => 'Username',
            'rememberMe'              => TRUE,
            'loginThrottling'         => TRUE,
            'loginThrottlingAttempts' => 5,
            'loginThrottlingLockout'  => 60,
            'userIdleTime'            => 15,
            'defaultRoleID'           => $roleID,
            'loginPage'               => '/'
        ]);
    }
}
