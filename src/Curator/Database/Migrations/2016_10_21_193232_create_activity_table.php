<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the Activity table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds a list of user activity.
        Schema::create('Activity', function(Blueprint $table)
        {
            $table->increments('activityID');
            $table->unsignedInteger('userID');
            $table->string('action');
            $table->string('ipAddress', 45);
            $table->timestamp('created_on');
        });
    }

    /**
     * Reverse the Activity table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Activity');
    }
}
