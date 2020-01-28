<?php

use App\Habitude;
use Illuminate\Database\Migrations\Migration;

class AddStartHabitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Habitude::create(['title' => 'Игра на гитаре', 'user_id' => 1]);
        Habitude::create(['title' => 'Чтение книги', 'user_id' => 1]);
        Habitude::create(['title' => 'Выпить стакан воды', 'user_id' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
