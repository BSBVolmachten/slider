<?php namespace Bsbvolmachten\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenSliderMain2 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_slider_main', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_slider_main', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}