<?php

use App\Channel;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultChannel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Channel::create([
            'name' => 'Default',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Channel::where('id', '=', '1')->delete();
    }
}
