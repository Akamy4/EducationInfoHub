<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertIntoPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('positions')->insert([
            'name' => 'Преподаватель'
        ]);
        DB::table('positions')->insert([
            'name' => 'Старший преподаватель'
        ]);
        DB::table('positions')->insert([
            'name' => 'Доцент'
        ]);
        DB::table('positions')->insert([
            'name' => 'Профессор'
        ]);
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
