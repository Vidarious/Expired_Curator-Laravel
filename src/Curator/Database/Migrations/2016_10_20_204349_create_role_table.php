<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the Role table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds a list roles that users can be associated to.
        Schema::create('Role', function(Blueprint $table)
        {
            $table->increments('roleID');
            $table->string('roleName')->unique()->index();
            $table->string('description');
            $table->boolean('protected');
        });
    }

    /**
     * Reverse the Role table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Role');
    }
}
