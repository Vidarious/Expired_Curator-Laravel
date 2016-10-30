<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the User table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the Protected status.
        $statusID = Curator\Models\Status::select('statusID')
                                               ->where('description', 'Protected')
                                               ->first()
                                               ->statusID;

        //Insert the parent Super Administrator account. This is a special
        //account and cannot be deleted.
        DB::table('User')->insert([
            'username'     => 'SysAdmin',
            'displayName'  => 'SysAdmin',
            'passwordHash' => Hash::make('password'),
            'givenName'    => 'james',
            'familyName'   => 'druhan',
            'email'        => 'admin@example.com',
            'statusID'     => $statusID,
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
