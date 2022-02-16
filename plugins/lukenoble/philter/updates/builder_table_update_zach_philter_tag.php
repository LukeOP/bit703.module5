<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLukeNoblePhilterTag extends Migration
{
    public function up()
    {
        Schema::table('lukenoble_philter_tag', function ($table) {
            $table->primary(['id']);
        });
    }

    public function down()
    {
        Schema::table('lukenoble_philter_tag', function ($table) {
            $table->dropPrimary(['id']);
        });
    }
}
