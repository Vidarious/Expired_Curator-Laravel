<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the Permission table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds a list of permissions which can be used to protect content.
        //Permissions can be assigned to Roles and/or Users which gives users access
        //the protected content.
        Schema::create('Permission', function(Blueprint $table)
        {
            $table->increments('permissionID');
            $table->string('permissionName')->unique()->index();
            $table->string('displayName')->unique();
            $table->string('description');
            $table->boolean('protected');
        });
    }

    /**
     * Reverse the Permission table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Permission');
    }
}
