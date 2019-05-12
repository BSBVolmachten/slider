<?php namespace BsbVolmachten\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenSliderMain extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_slider_main', function($table)
        {
            $table->text('text')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_slider_main', function($table)
        {
            $table->string('text', 150)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
