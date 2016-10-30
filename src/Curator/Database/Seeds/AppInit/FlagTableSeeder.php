<?php

use Illuminate\Database\Seeder;

class FlagTableSeeder extends Seeder
{
    /**
     * Run the Flag table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert a list of system flags which can be assigned to users.
        //These are protected and cannot be deleted.
        DB::table('Flag')->insert([
            'description' => 'Password_Reset'
        ]);
    }
}
