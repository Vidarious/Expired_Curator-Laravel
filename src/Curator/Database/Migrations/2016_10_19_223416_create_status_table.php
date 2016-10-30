<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the Status table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds a list of status's which can be assigned to users.
        Schema::create('Status', function (Blueprint $table)
        {
            $table->increments('statusID');
            $table->string('description', 25)->unique();
        });
    }

    /**
     * Reverse the Status table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Status');
    }
}
