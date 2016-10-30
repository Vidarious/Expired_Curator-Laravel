<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the UserRole table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the relationship between users and their assigned role.
        Schema::create('UserRole', function(Blueprint $table)
        {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('roleID');

            $table->primary(['userID', 'roleID']);

            $table->foreign('userID')
                  ->references('userID')->on('User')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('roleID')
                  ->references('roleID')->on('Role')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the UserRole table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserRole');
    }
}
