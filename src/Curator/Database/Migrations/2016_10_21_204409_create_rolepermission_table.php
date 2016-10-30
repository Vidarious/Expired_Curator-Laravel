<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionTable extends Migration
{
    /**
     * Run the RolePermission table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the relationship between Roles and their assigned permissions.
        Schema::create('RolePermission', function(Blueprint $table)
        {
            $table->unsignedInteger('roleID');
            $table->unsignedInteger('permissionID');

            $table->primary(['roleID', 'permissionID']);

            $table->foreign('roleID')
                  ->references('roleID')->on('Role')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('permissionID')
                  ->references('permissionID')->on('Permission')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the RolePermission table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RolePermission');
    }
}
