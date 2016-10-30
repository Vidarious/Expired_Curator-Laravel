<?php

/*
|--------------------------------------------------------------------------
| Curator: Curator Database Seeder
|--------------------------------------------------------------------------
|
| This file calls all the necessary seeders for the application data.
|
*/

use Illuminate\Database\Seeder;

class CuratorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds for the Curator application.
     *
     * @return void
     */
    public function run()
    {
        //Seed application data for the various Status's.
        $this->call(StatusTableSeeder::class);

        //Seed application data for Admin account.
        $this->call(UserTableSeeder::class);

        //Seed application data for Flag's.
        $this->call(FlagTableSeeder::class);

        //Seed applications data for Role's.
        $this->call(RoleTableSeeder::class);

        //Seed applications data for Permission's.
        $this->call(PermissionTableSeeder::class);

        //Seed application data for Setting's.
        $this->call(SettingTableSeeder::class);

        //Seed application data with Activity data.
        $this->call(ActivitySeeder::class);

        //Seed application data with User/Role relationship.
        $this->call(UserRoleSeeder::class);

        //Seed application data with Role/Permission relationship.
        $this->call(RolePermissionSeeder::class);

        //Seed application data with User/Flag relationship.
        $this->call(UserFlagTableSeeder::class);
    }
}
