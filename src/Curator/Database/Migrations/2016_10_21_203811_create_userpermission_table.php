<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermissionTable extends Migration
{
    /**
     * Run the UserPermission table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the relationship between users and their assigned permissions.
        Schema::create('UserPermission', function(Blueprint $table)
        {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('permissionID');

            $table->primary(['userID', 'permissionID']);

            $table->foreign('userID')
                  ->references('userID')->on('User')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('permissionID')
                  ->references('permissionID')->on('Permission')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the UserPermission table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserPermission');
    }
}
