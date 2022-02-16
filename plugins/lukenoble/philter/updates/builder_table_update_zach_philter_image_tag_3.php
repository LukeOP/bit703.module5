<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLukeNoblePhilterImageTag3 extends Migration
{
    public function up()
    {
        Schema::table('lukenoble_philter_image_tag', function ($table) {
            $table->integer('image_id')->unsigned(false)->change();
        });
    }

    public function down()
    {
        Schema::table('lukenoble_philter_image_tag', function ($table) {
            $table->integer('image_id')->unsigned()->change();
        });
    }
}
