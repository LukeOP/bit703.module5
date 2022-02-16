<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLukeNoblePhilterImage extends Migration
{
    public function up()
    {
        Schema::table('lukenoble_philter_image', function ($table) {
            $table->integer('id')->unsigned()->change();
        });
    }

    public function down()
    {
        Schema::table('lukenoble_philter_image', function ($table) {
            $table->integer('id')->unsigned(false)->change();
        });
    }
}
