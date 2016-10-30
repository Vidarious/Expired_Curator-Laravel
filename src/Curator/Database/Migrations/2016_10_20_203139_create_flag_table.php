<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlagTable extends Migration
{
    /**
     * Run the Flag table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds a list of flags which can be assigned to a user.
        Schema::create('Flag', function(Blueprint $table)
        {
            $table->increments('flagID');
            $table->string('description', 25)->unique()->index();
        });
    }

    /**
     * Reverse the Flag table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Flag');
    }
}
