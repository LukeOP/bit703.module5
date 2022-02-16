<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLukeNoblePhilterImageTag extends Migration
{
    public function up()
    {
        Schema::table('lukenoble_philter_image_tag', function ($table) {
            $table->primary(['image_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::table('lukenoble_philter_image_tag', function ($table) {
            $table->dropPrimary(['image_id', 'tag_id']);
        });
    }
}
