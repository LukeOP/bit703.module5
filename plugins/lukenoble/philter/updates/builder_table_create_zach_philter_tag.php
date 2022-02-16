<?php

namespace LukeNoble\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLukeNoblePhilterTag extends Migration
{
    public function up()
    {
        Schema::create('lukenoble_philter_tag', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('tag', 191);
        });
    }

    public function down()
    {
        Schema::dropIfExists('lukenoble_philter_tag');
    }
}
