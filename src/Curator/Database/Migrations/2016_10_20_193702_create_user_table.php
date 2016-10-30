<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the User table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the user base for the Curator login system.
        Schema::create('User', function (Blueprint $table)
        {
            $table->increments('userID');
            $table->string('username', 25)->unique();
            $table->string('displayName', 50);
            $table->string('passwordHash');
            $table->string('givenName', 50)->nullable();
            $table->string('familyName', 50)->nullable();
            $table->string('email')->unique();
            $table->unsignedInteger('statusID');
            $table->timestamps();

            $table->index(['username', 'email']);

            $table->foreign('statusID')
                  ->references('statusID')->on('Status')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the User table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('User');
    }
}
