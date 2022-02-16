<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLukeNoblePhilterTag2 extends Migration
{
    public function up()
    {
        Schema::table('lukenoble_philter_tag', function ($table) {
            $table->increments('id')->change();
        });
    }

    public function down()
    {
        Schema::table('lukenoble_philter_tag', function ($table) {
            $table->integer('id')->change();
        });
    }
}
