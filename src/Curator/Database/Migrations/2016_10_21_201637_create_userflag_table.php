<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserflagTable extends Migration
{
    /**
     * Run the UserFlag table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the relationship between users and their assigned flags.
        Schema::create('UserFlag', function(Blueprint $table)
        {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('flagID');

            $table->primary(['userID', 'flagID']);

            $table->foreign('userID')
                  ->references('userID')->on('User')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('flagID')
                  ->references('flagID')->on('Flag')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the UserFlag status migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserFlag');
    }
}
