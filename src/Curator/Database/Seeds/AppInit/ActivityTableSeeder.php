<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Curator\Models;

class ActivitySeeder extends Seeder
{
    /**
     * Run the Activity table seeds.
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

        //Insert first record of activity - The creation of the SysAdmin user.
        DB::table('Activity')->insert([
            'userID'     => $userID,
            'action'     => 'Created SysAdmin user with Super Administrator permission. This user cannot be deleted.',
            'ipAddress'  => 'System',
            'created_on' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
