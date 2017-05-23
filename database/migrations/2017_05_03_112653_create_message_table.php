<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->text('content');
            $table->string('created_ip');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
