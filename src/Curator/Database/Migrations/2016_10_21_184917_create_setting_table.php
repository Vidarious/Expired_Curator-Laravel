<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the Setting table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the settings for the Curator application.
        Schema::create('Setting', function(Blueprint $table)
        {
            $table->increments('settingID');
            $table->string('loginMethod', 15);
            $table->boolean('rememberMe');
            $table->boolean('loginThrottling');
            $table->unsignedTinyInteger('loginThrottlingAttempts');
            $table->unsignedInteger('loginThrottlingLockout');
            $table->unsignedInteger('userIdleTime');
            $table->unsignedinteger('defaultRoleID');
            $table->string('loginPage');

            $table->foreign('defaultRoleID')
                  ->references('roleID')->on('Role')
                  ->onDelete('no action')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the Setting table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Setting');
    }
}
