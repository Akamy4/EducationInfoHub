<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertIntoDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('departments')->insert([
            'name' => 'Кафедра Менеджмента и Бизнеса'
        ]);
        DB::table('departments')->insert([
            'name' => 'Кафедра Социально-Гуманитарных Наук'
        ]);
        DB::table('departments')->insert([
            'name' => 'Кафедра Финансов и Учета'
        ]);
        DB::table('departments')->insert([
            'name' => 'Языковой Центр'
        ]);
        DB::table('departments')->insert([
            'name' => 'Кафедра Бизнес Информатики'
        ]);
        DB::table('departments')->insert([
            'name' => 'Кафедра «Туризма и Гостеприимства»'
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
