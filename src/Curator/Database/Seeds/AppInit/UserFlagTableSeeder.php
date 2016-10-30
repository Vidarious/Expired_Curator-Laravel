<?php
use Illuminate\Database\Seeder;

class UserFlagTableSeeder extends Seeder
{
    /**
     * Run the Flag table seeds.
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

        //Get ID for Password Reset.
        $flagID = Curator\Models\Flag::select('flagID')
                                           ->where('description', 'Password_Reset')
                                           ->first()
                                           ->flagID;

        //Insert a list of system flags which can be assigned to users.
        //These are protected and cannot be deleted.
        DB::table('UserFlag')->insert([
            'userID' => $userID,
            'flagID' => $flagID
        ]);
    }
}
