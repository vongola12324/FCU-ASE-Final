<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('content');
            $table->string('location')->nullable();
            $table->timestamp('begin_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('thumbs_up')->unsigned()->default(0);
            $table->string('created_ip');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
